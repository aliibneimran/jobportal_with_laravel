@extends('frontend.layouts.app')

@section('title','Candidat')

@section('content')
<main class="main">
      <section class="section-box-2">
        <div class="container">
          <div class="banner-hero banner-company">
            <div class="block-banner text-center">
              <h3 class="wow animate__animated animate__fadeInUp">Browse Candidates</h3>
              <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, <br class="d-none d-xl-block">atque delectus molestias quis?</div>
              <div class="box-list-character">
                <ul>
                  <li><a class="active" href="#">A</a></li>
                  <li><a href="#">B</a></li>
                  <li><a href="#">C</a></li>
                  <li><a href="#">D</a></li>
                  <li><a href="#">E</a></li>
                  <li><a href="#">F</a></li>
                  <li><a href="#">G</a></li>
                  <li><a href="#">H</a></li>
                  <li><a href="#">I</a></li>
                  <li><a href="#">J</a></li>
                  <li><a href="#">K</a></li>
                  <li><a href="#">L</a></li>
                  <li><a href="#">M</a></li>
                  <li><a href="#">N</a></li>
                  <li><a href="#">O</a></li>
                  <li><a href="#">P</a></li>
                  <li><a href="#">Q</a></li>
                  <li><a href="#">R</a></li>
                  <li><a href="#">S</a></li>
                  <li><a href="#">T</a></li>
                  <li><a href="#">U</a></li>
                  <li><a href="#">V</a></li>
                  <li><a href="#">W</a></li>
                  <li><a href="#">X</a></li>
                  <li><a href="#">Y</a></li>
                  <li><a href="#">Z</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-30">
        <div class="container">           
          <div class="content-page">
            <div class="box-filters-job">
              <div class="row">
                <div class="col-xl-6 col-lg-5"><span class="text-small text-showing">Showing <strong>41-60 </strong>of <strong>944 </strong>jobs</span></div>
                <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                  <div class="display-flex2">
                    <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                      <div class="dropdown dropdown-sort">
                        <button class="btn dropdown-toggle" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>12</span><i class="fi-rr-angle-small-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                          <li><a class="dropdown-item active" href="#">10</a></li>
                          <li><a class="dropdown-item" href="#">12</a></li>
                          <li><a class="dropdown-item" href="#">20</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="box-border"><span class="text-sortby">Sort by:</span>
                      <div class="dropdown dropdown-sort">
                        <button class="btn dropdown-toggle" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span><i class="fi-rr-angle-small-down"></i></button>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                          <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                          <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                          <li><a class="dropdown-item" href="#">Rating Post</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="box-view-type"><a class="view-type" href="jobs-list.html"><img src="assets/imgs/template/icons/icon-list.svg" alt="jobBox"></a><a class="view-type" href="jobs-grid.html"><img src="assets/imgs/template/icons/icon-grid-hover.svg" alt="jobBox"></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user1.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Robert Fox</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user2.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Cody Fisher</h5></a><span class="font-xs color-text-mutted">Python developer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user3.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Jerome Bell</h5></a><span class="font-xs color-text-mutted">Content Manager</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user4.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Jane Cooper</h5></a><span class="font-xs color-text-mutted">Network</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user5.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Floyd Miles</h5></a><span class="font-xs color-text-mutted">Photo Editing</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user6.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Devon Lane</h5></a><span class="font-xs color-text-mutted">Online Marketing</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user7.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Jerome Bell</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user8.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Eleanor</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user9.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Theresa</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user10.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Robert Fox</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user11.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Cameron</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user12.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Jacob Jones</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user13.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Court Henry</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user14.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Hawkins</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user15.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5>Howard</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card-grid-2 hover-up">
                  <div class="card-grid-2-image-left">
                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                        <figure><img alt="jobBox" src="assets/imgs/page/candidates/user1.png"></figure></a></div>
                    <div class="card-profile pt-10"><a href="candidate-details.html">
                        <h5> Alexander</h5></a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                      <div class="rate-reviews-small pt-5"><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span><img src="assets/imgs/template/icons/star.svg" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs">(65)</span></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                      <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5" href="jobs-grid.html">Digital</a>
                      </div>
                    </div>
                    <div class="employers-info align-items-center justify-content-center mt-15">
                      <div class="row">
                        <div class="col-6"><span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i><span class="font-sm color-text-mutted">Chicago, US</span></span></div>
                        <div class="col-6"><span class="d-flex justify-content-end align-items-center"><i class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45 / hour</span></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="paginations">
            <ul class="pager">
              <li><a class="pager-prev" href="#"></a></li>
              <li><a class="pager-number" href="#">1</a></li>
              <li><a class="pager-number" href="#">2</a></li>
              <li><a class="pager-number" href="#">3</a></li>
              <li><a class="pager-number" href="#">4</a></li>
              <li><a class="pager-number" href="#">5</a></li>
              <li><a class="pager-number active" href="#">6</a></li>
              <li><a class="pager-number" href="#">7</a></li>
              <li><a class="pager-next" href="#"></a></li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section-box mt-50 mb-50">
        <div class="container">
          <div class="text-start">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and Blog</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news, updates and tips</p>
          </div>
        </div>
        <div class="container">
          <div class="mt-50">
            <div class="box-swiper style-nav-top">
              <div class="swiper-container swiper-group-3 swiper">
                <div class="swiper-wrapper pb-70 pt-5">
                  <div class="swiper-slide">
                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                      <div class="text-center card-grid-3-image"><a href="#">
                          <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news1.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                        <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png" alt="jobBox">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Sarah Harding</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                      <div class="text-center card-grid-3-image"><a href="#">
                          <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news2.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">Events</a></div>
                        <h5><a href="blog-details.html">39 Strengths and Weaknesses To Discuss in a Job Interview</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user2.png" alt="jobBox">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Steven Jobs</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">6 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                      <div class="text-center card-grid-3-image"><a href="#">
                          <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news3.png"></figure></a></div>
                      <div class="card-block-info">
                        <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                        <h5><a href="blog-details.html">Interview Question: Why Dont You Have a Degree?</a></h5>
                        <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an interviewer asks you why you dont have a degree, and read example answers that can help you craft</p>
                        <div class="card-2-bottom mt-20">
                          <div class="row">
                            <div class="col-lg-6 col-6">
                              <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user3.png" alt="jobBox">
                                <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Wiliam Kend</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                              </div>
                            </div>
                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">9 mins to read</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
            <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html">Load More Posts</a></div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50 mb-20">
        <div class="container">
          <div class="box-newsletter">
            <div class="row">
              <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-left.png" alt="joxBox"></div>
              <div class="col-lg-12 col-xl-6 col-12">
                <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                <div class="box-form-newsletter mt-40">
                  <form class="form-newsletter">
                    <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                    <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                  </form>
                </div>
              </div>
              <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-right.png" alt="joxBox"></div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection
