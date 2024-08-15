    <!-- Viewed products (Carousel) -->
    <section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">
      <h2 class="h3 border-bottom pb-4 mb-0">Viewed products</h2>

      <!-- Product carousel -->
      <div class="position-relative mx-md-1">

        <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
        <button type="button" class="viewed-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle-y ms-n1 d-none d-sm-inline-flex" aria-label="Prev">
          <i class="ci-chevron-left fs-lg animate-target"></i>
        </button>
        <button type="button" class="viewed-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 end-0 z-2 translate-middle-y me-n1 d-none d-sm-inline-flex" aria-label="Next">
          <i class="ci-chevron-right fs-lg animate-target"></i>
        </button>

        <!-- Slider -->
        <div class="swiper py-4 px-sm-3" data-swiper='{
          "slidesPerView": 2,
          "spaceBetween": 24,
          "loop": true,
          "navigation": {
            "prevEl": ".viewed-prev",
            "nextEl": ".viewed-next"
          },
          "breakpoints": {
            "768": {
              "slidesPerView": 3
            },
            "992": {
              "slidesPerView": 4
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide">
              <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                <div class="position-relative">
                  <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                    <div class="d-flex flex-column gap-2">
                      <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                        <i class="ci-heart fs-base animate-target"></i>
                      </button>
                      <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                        <i class="ci-refresh-cw fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                  <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                    <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                      <i class="ci-more-vertical fs-lg"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="ci-heart fs-sm ms-n1 me-2"></i>
                          Add to Wishlist
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                          Compare
                        </a>
                      </li>
                    </ul>
                  </div>
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                    <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                      <img src="/assets/img/shop/electronics/13.png" alt="Dualsense Edge">
                    </div>
                  </a>
                </div>
                <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <div class="d-flex gap-1 fs-xs">
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                    </div>
                    <span class="text-body-tertiary fs-xs">(187)</span>
                  </div>
                  <h3 class="pb-1 mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                      <span class="animate-target">Sony Dualsense Edge Controller</span>
                    </a>
                  </h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="h5 lh-1 mb-0">$200.00</div>
                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                      <i class="ci-shopping-cart fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                <div class="position-relative">
                  <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                    <div class="d-flex flex-column gap-2">
                      <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                        <i class="ci-heart fs-base animate-target"></i>
                      </button>
                      <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                        <i class="ci-refresh-cw fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                  <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                    <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                      <i class="ci-more-vertical fs-lg"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="ci-heart fs-sm ms-n1 me-2"></i>
                          Add to Wishlist
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                          Compare
                        </a>
                      </li>
                    </ul>
                  </div>
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                    <span class="badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">-17%</span>
                    <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                      <img src="/assets/img/shop/electronics/11.png" alt="Nikon Camera">
                    </div>
                  </a>
                </div>
                <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <div class="d-flex gap-1 fs-xs">
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                    </div>
                    <span class="text-body-tertiary fs-xs">(14)</span>
                  </div>
                  <h3 class="pb-1 mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                      <span class="animate-target">VRB01 Camera Nikon Max</span>
                    </a>
                  </h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="h5 lh-1 mb-0">$652.00 <del class="text-body-tertiary fs-sm fw-normal">$785.00</del></div>
                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                      <i class="ci-shopping-cart fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                <div class="position-relative">
                  <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                    <div class="d-flex flex-column gap-2">
                      <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                        <i class="ci-heart fs-base animate-target"></i>
                      </button>
                      <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                        <i class="ci-refresh-cw fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                  <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                    <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                      <i class="ci-more-vertical fs-lg"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="ci-heart fs-sm ms-n1 me-2"></i>
                          Add to Wishlist
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                          Compare
                        </a>
                      </li>
                    </ul>
                  </div>
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                    <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                      <img src="/assets/img/shop/electronics/10.png" alt="iPhone 14">
                    </div>
                  </a>
                </div>
                <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <div class="d-flex gap-1 fs-xs">
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-half text-warning"></i>
                    </div>
                    <span class="text-body-tertiary fs-xs">(335)</span>
                  </div>
                  <h3 class="pb-1 mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                      <span class="animate-target">Apple iPhone 14 128GB Blue</span>
                    </a>
                  </h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="h5 lh-1 mb-0">$899.00</div>
                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                      <i class="ci-shopping-cart fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                <div class="posittion-relative">
                  <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                    <div class="d-flex flex-column gap-2">
                      <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                        <i class="ci-heart fs-base animate-target"></i>
                      </button>
                      <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                        <i class="ci-refresh-cw fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                  <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                    <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                      <i class="ci-more-vertical fs-lg"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="ci-heart fs-sm ms-n1 me-2"></i>
                          Add to Wishlist
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                          Compare
                        </a>
                      </li>
                    </ul>
                  </div>
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                    <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                      <img src="/assets/img/shop/electronics/07.png" alt="iPad Pro">
                    </div>
                  </a>
                </div>
                <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <div class="d-flex gap-1 fs-xs">
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-half text-warning"></i>
                    </div>
                    <span class="text-body-tertiary fs-xs">(49)</span>
                  </div>
                  <h3 class="pb-1 mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                      <span class="animate-target">Tablet Apple iPad Pro M1</span>
                    </a>
                  </h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="h5 lh-1 mb-0">$739.00</div>
                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                      <i class="ci-shopping-cart fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                <div class="position-relative">
                  <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                    <div class="d-flex flex-column gap-2">
                      <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                        <i class="ci-heart fs-base animate-target"></i>
                      </button>
                      <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                        <i class="ci-refresh-cw fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                  <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                    <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                      <i class="ci-more-vertical fs-lg"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="ci-heart fs-sm ms-n1 me-2"></i>
                          Add to Wishlist
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#!">
                          <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                          Compare
                        </a>
                      </li>
                    </ul>
                  </div>
                  <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                    <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                      <img src="/assets/img/shop/electronics/06.png" alt="AirPods 2">
                    </div>
                  </a>
                </div>
                <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <div class="d-flex gap-1 fs-xs">
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star text-body-tertiary opacity-75"></i>
                    </div>
                    <span class="text-body-tertiary fs-xs">(78)</span>
                  </div>
                  <h3 class="pb-1 mb-2">
                    <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                      <span class="animate-target">Headphones Apple AirPods 2 Pro</span>
                    </a>
                  </h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="h5 lh-1 mb-0">$224.00</div>
                    <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                      <i class="ci-shopping-cart fs-base animate-target"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- External slider prev/next buttons visible on screens < 500px wide (sm breakpoint) -->
        <div class="d-flex justify-content-center gap-2 mt-n2 mb-3 pb-1 d-sm-none">
          <button type="button" class="viewed-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="viewed-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>
        </div>
      </div>
    </section>