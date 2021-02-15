<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Research</title>
    <link rel="stylesheet" href="<?= base_url() . "assets/css/" ?>pdfCss.css">

    <!-- Pdf viewer here -->
    <script src="<?= base_url() . "assets/js/pdfViewer.js" ?>"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- Canvas here -->
    <center>
        <div class="container">

            <div class="top-bar">
                <button class="btn" id="prev-page">
                    <i class="fa fa-arrow-circle-left"></i>
                    Previous page
                </button>
                <span class="page-info" style="text-align:center">
                    Page <span id="page-num"></span> of <span id="page-count"></span>
                </span>
                <button class="btn" id="next-page" style="margin-left: 10px;">
                    Next page
                    <i class="fa fa-arrow-circle-right"></i>
                </button>

                <!-- Top bar end -->
            </div>
            <canvas id="pdf-render"></canvas>

        </div>
    </center>
    <!-- End of canvas -->

    <?php $url = base_url() . "documents/$fileName" ?>
    <script>
        const url = "<?= $url ?>";

        let pdfDoc = null,
            pageNum = 1,
            pageIsRendering = false,
            pageNumIsPending = null;

        const scale = 1.5,
            canvas = document.querySelector('#pdf-render'),
            ctx = canvas.getContext('2d');

        // Render the page
        const renderPage = num => {
            pageIsRendering = true;

            // Get page
            pdfDoc.getPage(num).then(page => {
                // Set scale
                const viewport = page.getViewport({
                    scale
                });
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                const renderCtx = {
                    canvasContext: ctx,
                    viewport
                };

                page.render(renderCtx).promise.then(() => {
                    pageIsRendering = false;

                    if (pageNumIsPending !== null) {
                        renderPage(pageNumIsPending);
                        pageNumIsPending = null;
                    }
                });

                // Output current page
                document.querySelector('#page-num').textContent = num;
            });
        };

        // Check for pages rendering
        const queueRenderPage = num => {
            if (pageIsRendering) {
                pageNumIsPending = num;
            } else {
                renderPage(num);
            }
        };

        // Show Prev Page
        const showPrevPage = () => {
            if (pageNum <= 1) {
                return;
            }
            pageNum--;
            queueRenderPage(pageNum);
        };

        // Show Next Page
        const showNextPage = () => {
            if (pageNum >= pdfDoc.numPages) {
                return;
            }
            pageNum++;
            queueRenderPage(pageNum);
        };

        // Get Document
        pdfjsLib
            .getDocument(url)
            .promise.then(pdfDoc_ => {
                pdfDoc = pdfDoc_;

                document.querySelector('#page-count').textContent = pdfDoc.numPages;

                renderPage(pageNum);
            })
            .catch(err => {
                // Display error
                const div = document.createElement('div');
                div.className = 'error';
                div.appendChild(document.createTextNode(err.message));
                document.querySelector('body').insertBefore(div, canvas);
                // Remove top bar
                document.querySelector('.top-bar').style.display = 'none';
            });

        // Button Events
        document.querySelector('#prev-page').addEventListener('click', showPrevPage);
        document.querySelector('#next-page').addEventListener('click', showNextPage);
    </script>
    <!-- JQuery -->

    <!-- Script for not letting the user right click to download the images -->
    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>

</body>

</html>