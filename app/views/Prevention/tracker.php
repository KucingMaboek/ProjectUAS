<section class="coronavirus_map">
    <iframe class="map" src="https://coronavirus-92ebd.web.app/map?embed=true"
            allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen>
    </iframe>
</section>


<section class="world_wide_tracker tracker_page pad_top">
    <div class="container">
        <img class="tracker_map" src="<?= BASEURL; ?>/assets/images/tracker-map-bg.png" alt=""/>
        <div class="tracker_text">
            <h5>Worldwide Tracker</h5>
            <h2>Confirmed Coronavirus Cases</h2>
            <p>Last updated: April 08, 2020, 01:43 GMT</p>
        </div>
        <div class="row tracker_inner">
            <div class="col-lg-3 col-6">
                <div class="media">
                    <div class="d-flex">
                        <img src="<?= BASEURL; ?>/assets/images/icon/corona-red-1.png" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2 id="total_cases"></h2>
                        <p>Total Cases</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="media">
                    <div class="d-flex">
                        <img src="<?= BASEURL; ?>/assets/images/icon/corona-black-1.png" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2 id="total_deaths"></h2>
                        <p>Total Deaths</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="media">
                    <div class="d-flex">
                        <img src="<?= BASEURL; ?>/assets/images/icon/corona-green-1.png" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2 id="total_recovered"></h2>
                        <p>Recovered</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="media">
                    <div class="d-flex">
                        <img src="<?= BASEURL; ?>/assets/images/icon/corona-yellow-1.png" alt=""/>
                    </div>
                    <div class="media-body">
                        <h2 id="new_cases"></h2>
                        <p>New Cases</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="confirm_boxes row" id="coronaCountryUpdate" data-country="bangladesh">
            <div class="col-lg-2">
                <div class="confirm_item">
                    <i class="linearicons-calendar-check"></i>
                    <h3 class="cuCountryTodayCases"></h3>
                    <p>Today</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="confirm_item">
                    <i class="linearicons-earth-lock"></i>
                    <h3 class="cuContries"></h3>
                    <p>Countries</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="confirm_item">
                    <i class="linearicons-clipboard-user"></i>
                    <h3 class="cuCountryTotal"></h3>
                    <p>Active Cases</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="confirm_item">
                    <i class="linearicons-tombstone"></i>
                    <h3 class="cuTotal"></h3>
                    <p>Worldwide Cases</p>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="confirm_item">
                    <i class="linearicons-return2"></i>
                    <h3 class="cuCountryRecovered"></h3>
                    <p>Recovered</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="total_cases_chart">
    <div class="container">
        <div class="total_cases_inner">
            <iframe style="width:100%" src="https://coronavirus.app/chart/evolution/infected?embed=true"
                    frameborder="0" allow="autoplay;" allowfullscreen=""></iframe>
        </div>
        <div class="total_cases_inner">
            <iframe style="width:100%" src="https://coronavirus.app/chart/new/infected?embed=true" frameborder="0"
                    allow="autoplay;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>


<section class="data_table_area">
    <div class="container">
        <div class="main_title text-center">
            <h5>Tracking by countries</h5>
            <h2>Coronavirus in numbers</h2>
        </div>
        <div class="all-country table-responsive">
            <table id="world_table" class="table table-striped table-bordered dataTable no-footer" role="grid"
                   aria-describedby="world_table_info">
                <thead>
                <tr role="row">
                    <th>Serial</th>
                    <th>Flag</th>
                    <th>Country</th>
                    <th>Cases</th>
                    <th>New Cases</th>
                    <th>Deaths</th>
                    <th>New Deaths</th>
                    <th>Recovered
                    </th>
                    <th>Active</th>
                    <th>Critical</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</section>


<section class="app_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="app_text">
                    <h2>Get <span>epidemic</span> app!</h2>
                    <p>
                        Download our app now, track Coronavirus cases real-time and
                        follow instant updates.
                    </p>
                    <a href="#"><img src="<?= BASEURL; ?>/assets/images/apple-btn.png" alt=""/></a>
                    <a href="#"><img src="<?= BASEURL; ?>/assets/images/google-btn.png" alt=""/></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="app_mobile">
                    <div class="mobile_image">
                        <img src="<?= BASEURL; ?>/assets/images/mobile-1.png" alt=""/>
                        <img src="<?= BASEURL; ?>/assets/images/mobile-2.png" alt=""/>
                    </div>
                    <ul class="corona_img nav">
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-1.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-2.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-3.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-4.png" alt=""/>
                        </li>
                        <li data-parallax='{"y": 100}'>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-5.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-6.png" alt=""/>
                        </li>
                        <li>
                            <img src="<?= BASEURL; ?>/assets/images/icon/app-virus-7.png" alt=""/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="subscribe_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="media">
                    <div class="d-flex">
                        <i class="linearicons-mailbox-full"></i>
                    </div>
                    <div class="media-body">
                        <h4>Subscribe our newsletter</h4>
                        <p>
                            Join our subscribers list to get latest news and updates
                            about COVID-19 delivered directly in your inbox.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mail_box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="&#xe997; Enter your email"
                               aria-label="Recipient's username" aria-describedby="button-addon2"/>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="linearicons-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <label class="container-checkbox">I accept the <span>Privacy Policy.</span>
                        <input type="checkbox"/>
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</section>