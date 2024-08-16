<x-theme>

</x-theme>


        <meta charset="utf-8" />
        <title>File Uploads | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->


        <!-- Theme Config Js -->


        <!-- App css -->




        <!-- Begin page -->
        <div class="wrapper">


            <!-- ========== Topbar Start ========== -->
            @theme("_partials/topbar")
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            @theme("_sidebar/sidebar")
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">File Uploads</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">File Uploads</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Dropzone File Upload</h4>
                                        <p class="text-muted font-14">
                                            DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#file-upload-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#file-upload-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="file-upload-preview">
                                                <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                    data-upload-preview-template="#uploadPreviewTemplate">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>

                                                    <div class="dz-message needsclick">
                                                        <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                                        <h3>Drop files here or click to upload.</h3>
                                                        <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                            <strong>not</strong> actually uploaded.)</span>
                                                    </div>
                                                </form>

                                                <!-- Preview -->
                                                <div class="dropzone-previews mt-3" id="file-previews"></div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="file-upload-code">
                                                <p>Make sure to include following js files at end of <code>body element</code></p>

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- plugin js --&gt;
                                                        &lt;script src=&quot;assets/vendor/dropzone/min/dropzone.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;!-- init js --&gt;
                                                        &lt;script src=&quot;assets/js/ui/component.fileupload.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- File Upload --&gt;
                                                        &lt;form action=&quot;/&quot; method=&quot;post&quot; class=&quot;dropzone&quot; id=&quot;myAwesomeDropzone&quot; data-plugin=&quot;dropzone&quot; data-previews-container=&quot;#file-previews&quot;
                                                            data-upload-preview-template=&quot;#uploadPreviewTemplate&quot;&gt;
                                                            &lt;div class=&quot;fallback&quot;&gt;
                                                                &lt;input name=&quot;file&quot; type=&quot;file&quot; multiple /&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;dz-message needsclick&quot;&gt;
                                                                &lt;i class=&quot;h1 text-muted ri-upload-cloud-2-line&quot;&gt;&lt;/i&gt;
                                                                &lt;h3&gt;Drop files here or click to upload.&lt;/h3&gt;
                                                                &lt;span class=&quot;text-muted font-13&quot;&gt;(This is just a demo dropzone. Selected files are
                                                                    &lt;strong&gt;not&lt;/strong&gt; actually uploaded.)&lt;/span&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt;

                                                        &lt;!-- Preview --&gt;
                                                        &lt;div class=&quot;dropzone-previews mt-3&quot; id=&quot;file-previews&quot;&gt;&lt;/div&gt;

                                                        &lt;!-- file preview template --&gt;
                                                        &lt;div class=&quot;d-none&quot; id=&quot;uploadPreviewTemplate&quot;&gt;
                                                            &lt;div class=&quot;card mt-1 mb-0 shadow-none border&quot;&gt;
                                                                &lt;div class=&quot;p-2&quot;&gt;
                                                                    &lt;div class=&quot;row align-items-center&quot;&gt;
                                                                        &lt;div class=&quot;col-auto&quot;&gt;
                                                                            &lt;img data-dz-thumbnail src=&quot;#&quot; class=&quot;avatar-sm rounded bg-light&quot; alt=&quot;&quot;&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class=&quot;col ps-0&quot;&gt;
                                                                            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;text-muted fw-bold&quot; data-dz-name&gt;&lt;/a&gt;
                                                                            &lt;p class=&quot;mb-0&quot; data-dz-size&gt;&lt;/p&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class=&quot;col-auto&quot;&gt;
                                                                            &lt;!-- Button --&gt;
                                                                            &lt;a href=&quot;&quot; class=&quot;btn btn-link btn-lg text-muted&quot; data-dz-remove&gt;
                                                                                &lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->


                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->



        <!-- Theme Settings -->
        @theme("_partials/theme-setting")

        <!-- file preview template -->
        <div class="d-none" id="uploadPreviewTemplate">
            <div class="card mt-1 mb-0 shadow-none border">
                <div class="p-2">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                        </div>
                        <div class="col ps-0">
                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                            <p class="mb-0" data-dz-size></p>
                        </div>
                        <div class="col-auto">
                            <!-- Button -->
                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                <i class="ri-close-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendor js -->


        <!-- Code Highlight js -->
        <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
        <script src="assets/js/hyper-syntax.js"></script>

        <!-- Dropzone File Upload js -->
        <script src="assets/vendor/dropzone/min/dropzone.min.js"></script>

        <!-- File Upload Demo js -->
        <script src="assets/js/ui/component.fileupload.js"></script>

        <!-- App js -->


    </body>

</html>
