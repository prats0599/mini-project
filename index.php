<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mumbai Airport</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
       <link rel="stylesheet" href="css/homepage.css">
      <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

       </head>
<body>
    <div class="header">
        <div class="container">
            <a href="index.html" class="navbar-brand scroll-top">Mumbai Airport</a>

        </div>
        <!--/.container-->
    </div>
    <!--/.header-->
    <div class="container">
      <div>
          <ul class="nav1">
              <li class="tabs"><a href="index.html">Home</a></li>
              <li class="tabs"><a href="flight.html">Check Flight Status</a></li>
              <li class="tabs"><a href="contact.html">Contact Us</a></li>
              <li class="tabs"><a href="http://indiaairport.com/airports/mumbai/parking.htm">Car Parking</a></li>
          </ul>
      </div>
    </div>

   <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>The MUMBAI AIRPORT</h2>
                    <p>Travelling made Easy</p>
                </div>
            </div>
        </div>
    </section>

    <section id="book-table">
        <div class="form-container">
            <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-12">
                    <div class="left-info">
                      <h4>Arrivals</h4>
                      <form id="form-submit" action="" method="get">
                          <div class="row">
                              <div class="col-md-6">
                                  <fieldset>
                                      <select required name='day' onchange='this.form.()'>
                                          <option value="">Select Terminal</option>
                                          <option value="Monday">Terminal 1</option>
                                          <option value="Tuesday">Terminal 2</option>

                                      </select>
                                  </fieldset>
                              </div>
                              <div class="col-md-6">
                                  <fieldset>
                                      <select required name='hour' onchange='this.form.()'>
                                          <option value="">Select Airline</option>
                                          <option value="10-00">Jet Airways</option>
                                          <option value="12-00">Air India</option>
                                          <option value="14-00">Spice Jet</option>
                                          <option value="16-00">Indigo </option>
                                          <option value="18-00">Go Air</option>
                                          <option value="20-00">Vistara</option>
                                          <option value="22-00">Emirates</option>
                                      </select>
                                  </fieldset>
                              </div>
                              <div class="col-md-6">
                                  <fieldset>
                                    <select required name='hour' onchange='this.form.()'>
                                        <option value="">Select Airline Number</option>
                                        <option value="10-00">013f</option>
                                        <option value="12-00">013f1</option>
                                        <option value="14-00">013f2</option>
                                        <option value="16-00">013f3</option>
                                        <option value="18-00">013f4</option>
                                        <option value="20-00">013f5</option>
                                        <option value="22-00">013f6</option>
                                    </select>
                                  </fieldset>
                              </div>
                              <div class="col-md-6">
                                  <fieldset>
                                    <select required name='hour' onchange='this.form.()'>
                                        <option value="">Origin</option>
                                        <option value="10-00">India</option>
                                        <option value="12-00">Pakistan</option>
                                        <option value="14-00">Indonesia</option>
                                        <option value="16-00">Pakistan</option>
                                        <option value="18-00">USA</option>
                                        <option value="20-00">UK</option>
                                        <option value="22-00">Russia</option>
                                    </select></fieldset>
                              </div>
                              <div class="col-md-6">
                                  <fieldset>
                                      <select required class="person" name='persons' onchange='this.form.()'>
                                          <option value="">Date of Arrival</option>
                                          <option value="1-Person">today</option>
                                          <option value="2-Persons">Yesterday</option>
                                      </select>
                                  </fieldset>
                              </div>
                              <div class="col-md-6">
                                  <fieldset>
                                      <button type="submit" id="form-submit" class="btn">Check Status</button>
                                  </fieldset>
                              </div>
                          </div>
                      </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="right-info">
                        <h4>Departures</h4>
                        <form id="form-submit" action="" method="get">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='day' onchange='this.form.()'>
                                            <option value="">Select Terminal</option>
                                            <option value="Monday">Terminal 1</option>
                                            <option value="Tuesday">Terminal 2</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='hour' onchange='this.form.()'>
                                            <option value="">Select Airline</option>
                                            <option value="10-00">Jet Airways</option>
                                            <option value="12-00">Air India</option>
                                            <option value="14-00">Spice Jet</option>
                                            <option value="16-00">Indigo </option>
                                            <option value="18-00">Go Air</option>
                                            <option value="20-00">Vistara</option>
                                            <option value="22-00">Emirates</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                      <select required name='hour' onchange='this.form.()'>
                                          <option value="">Select Airline Number</option>
                                          <option value="10-00">013f</option>
                                          <option value="12-00">013f1</option>
                                          <option value="14-00">013f2</option>
                                          <option value="16-00">013f3</option>
                                          <option value="18-00">013f4</option>
                                          <option value="20-00">013f5</option>
                                          <option value="22-00">013f6</option>
                                      </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                      <select required name='hour' onchange='this.form.()'>
                                          <option value="">Origin</option>
                                          <option value="10-00">India</option>
                                          <option value="12-00">Pakistan</option>
                                          <option value="14-00">Indonesia</option>
                                          <option value="16-00">Pakistan</option>
                                          <option value="18-00">USA</option>
                                          <option value="20-00">UK</option>
                                          <option value="22-00">Russia</option>
                                      </select></fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required class="person" name='persons' onchange='this.form.()'>
                                            <option value="">Date of Departure</option>
                                            <option value="1-Person">today</option>
                                            <option value="2-Persons">Yesterday</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <button type="submit" a href="flight.html" id="form-submit" class="btn">Check Status</a></button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section>
  <div id="featured-hotel" class="fh5co-bg-color">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2>Hotels Near the Airport</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="feature-full-1col">
          <div class="image" style="background-image: url(img/hotel_feture_1.jpg);">
          </div>
          <div class="desc">
            <h3>JW Marriot Hotel</h3>
            <p>Unparalleled luxury and world-class service await you at JW Marriott Mumbai Sahar in India. Our plush hotel accommodations feature 588 spacious rooms with pillow top beds, marble bathrooms and high-speed internet, as well as generous work desks and 24-hour room service. For inquiries, please email us at JWMumbaiSaharAYS@marriott.com. Sample a mélange of cuisines, including authentic Italian, Japanese or classic Indian at any one of our luxury hotel's restaurants. </p>
            <p><a href="https://www.marriott.com/hotels/travel/bomsa-jw-marriott-mumbai-sahar/" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
          </div>
        </div>

        <div class="feature-full-2col">
          <div class="f-hotel">
            <div class="image" style="background-image: url(img/hotel_feture_2.png);">
              <div class="descrip text-center">
              </div>
            </div>
            <div class="desc">
              <h3>Hyatt Regency Hotel</h3>
              <p>One of the foremost 5 star luxury hotels in Mumbai, the Hyatt Regency Mumbai is located minutes away from the Mumbai airport. From the spacious, well-appointed guestrooms and conference spaces to world-class wedding services, the hotel indulges guests in contemporary luxury and convenience to ensure they make the most of being away (from home) when they stay with us. </p>
              <p><a href="https://www.hyatt.com/en-US/brands/hyatt-regency?&src=adm_sem_agn_360i_crp_ppc_iCORP_ROOM_ENG_BRAND_GOO_WW_HR_google_GBL_BRAND_HR_PURE_EXA_e_hyatt%20regency_Brand&&src=adm_sem_agn_360i_crp_ppc_iCORP_ROOM_ENG_BRAND_GOO_WW_HR_google_GBL_BRAND_HR_PURE_EXA_%7bbidmatchtype%7d_hyatt%20regency_Brand&gclid=Cj0KCQjw5rbsBRCFARIsAGEYRwdsyzYyPC6N3xqhAgCCzTEoVH-rLuRotdGawN6AuyAI4LCcBE1DGPEaApC7EALw_wcB&gclsrc=aw.ds" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
            </div>
          </div>
          <div class="f-hotel">
            <div class="image" style="background-image: url(img/trident.jpg);">
              <div class="descrip text-center">
              </div>
            </div>
            <div class="desc">
              <h3>Trident </h3>
              <p>24-hour airport shuttle service is available. Fees may apply. Contact the property in advance to make arrangements. To register at this property, guests who are Indian citizens must provide a valid photo identity card issued by the Government of India; guests who are foreign nationals must present a valid passport and visa. </p>
              <p><a href="https://www.guestreservations.com/trident-nariman-point-mumbai/booking?gclid=Cj0KCQjw5rbsBRCFARIsAGEYRwfpQd4vsmidl05jTW6y2NazxxB3GjAY3AsEWYexwjgHB-6u7p0l0GUaAh_oEALw_wcB" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Facilities at The Airport</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="blog-post">
                      <img src="img/res.jpg" alt="">
                        <div class="right-content">
                            <h2>Restaurants</h2>
                            <h4>Stumptown Tofu Schlitz</h4>
                            <p>This young and vibrant place is elegantly spread over an area of 2500 sq. ft and has a capacity to seat 85 persons with 6 persons with private dining areas &with personalized service.</p>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/bars.jpg" alt="">
                        <div class="right-content">
                            <h2>Bars</h2>
                            <h4>Rude Bar</h4>
                            <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                       </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/spa.jpg" alt="">
                        <div class="right-content">
                            <h2>Spa</h2>
                            <h4>Caressa Spa</h4>
                            <p>Caressaa Day Spa offers unique skin care treatments and rejuvenating massage therapy – administered by professional aestheticians and massage therapists.
                               Managed by Mrs. Rekha Chaudhari</p>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blog-post">
                        <img src="img/lounge.jpg" alt="">
                        <div class="right-content">
                            <h2>Premium Lounge</h2>
                            <h4>Relax-Lounge</h4>
                            <p>M.I.T.R.O.N is built on a humongous space adding a maximum space of 50+ people making it ideal for parties, get-together, office lunch/dinner, a date with your best friend or simply to unwind.
                              </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
