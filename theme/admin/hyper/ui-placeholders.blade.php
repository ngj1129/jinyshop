<x-theme>
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                    <li class="breadcrumb-item active">Placeholders</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Placeholders</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Placeholders</h4>
                                <p class="text-muted font-13">
                                    In the example below, we take a typical card component and recreate it with placeholders applied to create a “loading card”. Size and proportions are the same between the two.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#placeholders-preview" data-bs-toggle="tab"
                                            aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#placeholders-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="placeholders-preview">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card border shadow-none mb-md-0">
                                                    <img src="assets/images/small/small-1.jpg" class="card-img-top" alt="...">

                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                                            content.</p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->

                                            <div class="col-md-6">
                                                <div class="card border shadow-none mb-0" aria-hidden="true">
                                                    <img src="assets/images/small/small-2.jpg" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title placeholder-glow">
                                                            <span class="placeholder col-6"></span>
                                                        </h5>
                                                        <p class="card-text placeholder-glow">
                                                            <span class="placeholder col-7"></span>
                                                            <span class="placeholder col-4"></span>
                                                            <span class="placeholder col-4"></span>
                                                            <span class="placeholder col-6"></span>
                                                            <span class="placeholder col-8"></span>
                                                        </p>
                                                        <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->
                                        </div> <!-- end row-->
                                    </div> <!-- end tab-pan-->

                                    <div class="tab-pane" id="placeholders-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-md-6&quot;&gt;
                                                        &lt;div class=&quot;card border shadow-none mb-md-0&quot;&gt;
                                                            &lt;img src=&quot;assets/images/small/small-1.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;

                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
                                                                &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's
                                                                    content.&lt;/p&gt;
                                                                &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
                                                            &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                        &lt;/div&gt; &lt;!-- end card--&gt;
                                                    &lt;/div&gt; &lt;!-- end col--&gt;

                                                    &lt;div class=&quot;col-md-6&quot;&gt;
                                                        &lt;div class=&quot;card border shadow-none mb-0&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;img src=&quot;assets/images/small/small-2.jpg&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                &lt;h5 class=&quot;card-title placeholder-glow&quot;&gt;
                                                                    &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
                                                                &lt;/h5&gt;
                                                                &lt;p class=&quot;card-text placeholder-glow&quot;&gt;
                                                                    &lt;span class=&quot;placeholder col-7&quot;&gt;&lt;/span&gt;
                                                                    &lt;span class=&quot;placeholder col-4&quot;&gt;&lt;/span&gt;
                                                                    &lt;span class=&quot;placeholder col-4&quot;&gt;&lt;/span&gt;
                                                                    &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
                                                                    &lt;span class=&quot;placeholder col-8&quot;&gt;&lt;/span&gt;
                                                                &lt;/p&gt;
                                                                &lt;a href=&quot;#&quot; tabindex=&quot;-1&quot; class=&quot;btn btn-primary disabled placeholder col-6&quot;&gt;&lt;/a&gt;
                                                            &lt;/div&gt; &lt;!-- end card-body--&gt;
                                                        &lt;/div&gt; &lt;!-- end card--&gt;
                                                    &lt;/div&gt; &lt;!-- end col--&gt;
                                                &lt;/div&gt; &lt;!-- end row--&gt;
                                            </span>
                                        </pre>
                                    </div>
                                </div>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Color</h4>
                                <p class="text-muted font-13">
                                    By default, the <code>placeholder</code> uses <code>currentColor</code>. This can be overriden with a custom color or utility class.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#placeholder-color-preview" data-bs-toggle="tab"
                                            aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#placeholder-color-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="placeholder-color-preview">
                                        <span class="placeholder col-12"></span>
                                        <span class="placeholder col-12 bg-primary"></span>
                                        <span class="placeholder col-12 bg-secondary"></span>
                                        <span class="placeholder col-12 bg-success"></span>
                                        <span class="placeholder col-12 bg-danger"></span>
                                        <span class="placeholder col-12 bg-warning"></span>
                                        <span class="placeholder col-12 bg-info"></span>
                                        <span class="placeholder col-12 bg-light"></span>
                                        <span class="placeholder col-12 bg-dark"></span>
                                    </div> <!-- end tab-pan-->

                                    <div class="tab-pane" id="placeholder-color-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder col-12 bg-primary&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder col-12 bg-secondary&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder col-12 bg-success&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder col-12 bg-danger&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder col-12 bg-warning&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder col-12 bg-info&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder col-12 bg-light&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder col-12 bg-dark&quot;&gt;&lt;/span&gt;
                                            </span>
                                        </pre>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Width</h4>
                                <p class="text-muted font-13">
                                    You can change the <code>width</code> through grid column classes, width utilities, or inline styles.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#placeholder-width-preview" data-bs-toggle="tab"
                                            aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#placeholder-width-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="placeholder-width-preview">
                                        <span class="placeholder col-6"></span>
                                        <span class="placeholder w-75"></span>
                                        <span class="placeholder" style="width: 25%;"></span>
                                    </div>

                                    <div class="tab-pane" id="placeholder-width-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder w-75&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder&quot; style=&quot;width: 25%;&quot;&gt;&lt;/span&gt;
                                            </span>
                                        </pre>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Sizing</h4>
                                <p class="text-muted font-13">
                                    The size of <code>.placeholder</code>s are based on the typographic style of the parent element. Customize them with sizing modifiers: <code>.placeholder-lg</code>, <code>.placeholder-sm</code>, or <code>.placeholder-xs</code>.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#placeholder-sizing-preview" data-bs-toggle="tab"
                                            aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#placeholder-sizing-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="placeholder-sizing-preview">
                                        <span class="placeholder col-12 placeholder-lg"></span>
                                        <span class="placeholder col-12"></span>
                                        <span class="placeholder col-12 placeholder-sm"></span>
                                        <span class="placeholder col-12 placeholder-xs"></span>
                                    </div>

                                    <div class="tab-pane" id="placeholder-sizing-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;span class=&quot;placeholder col-12 placeholder-lg&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder col-12 placeholder-sm&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;placeholder col-12 placeholder-xs&quot;&gt;&lt;/span&gt;
                                            </span>
                                        </pre>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">How it works</h4>
                                <p class="text-muted font-13">
                                    Create placeholders with the <code>.placeholder</code> class and a grid column class (e.g., <code>.col-6</code>) to set the <code>width</code>. They can replace the text inside an element or as be added as a modifier class to an existing component.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#placeholder-works-preview" data-bs-toggle="tab"
                                            aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#placeholder-works-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="placeholder-works-preview">
                                        <p aria-hidden="true">
                                            <span class="placeholder col-6"></span>
                                          </p>

                                        <a href="#" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                                    </div>

                                    <div class="tab-pane" id="placeholder-works-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;p aria-hidden=&quot;true&quot;&gt;
                                                    &lt;span class=&quot;placeholder col-6&quot;&gt;&lt;/span&gt;
                                                &lt;/p&gt;

                                                &lt;a href=&quot;#&quot; class=&quot;btn btn-primary disabled placeholder col-4&quot; aria-hidden=&quot;true&quot;&gt;&lt;/a&gt;
                                            </span>
                                        </pre>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Animation</h4>
                                <p class="text-muted font-13">
                                    Animate placehodlers with <code>.placeholder-glow</code> or <code>.placeholder-wave</code> to better convey the perception of something being <em>actively</em> loaded.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#placeholder-animate-preview" data-bs-toggle="tab"
                                            aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#placeholder-animate-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="placeholder-animate-preview">
                                        <p class="placeholder-glow">
                                            <span class="placeholder col-12"></span>
                                        </p>

                                        <p class="placeholder-wave mb-0">
                                            <span class="placeholder col-12"></span>
                                        </p>
                                    </div>

                                    <div class="tab-pane" id="placeholder-animate-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;p class=&quot;placeholder-glow&quot;&gt;
                                                    &lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;
                                                &lt;/p&gt;

                                                &lt;p class=&quot;placeholder-wave mb-0&quot;&gt;
                                                    &lt;span class=&quot;placeholder col-12&quot;&gt;&lt;/span&gt;
                                                &lt;/p&gt;
                                            </span>
                                        </pre>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

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

    <!-- Code Highlight js -->
    <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/js/hyper-syntax.js"></script>

</x-theme>
