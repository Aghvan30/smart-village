@extends('frontend.layouts.master')
@section('content')

    <section class="ctn">
        <div class="title">
            <h2>Get in touch</h2>
            <p>We'd love to hear from you</p>
        </div>
        <div class="nav-cnt-rom">
            <div class="email">
                <b>write</b>
                <span>
					<a href="mailto:info@artvillagedesign.com">info@artvillagedesign.com</a>
				</span>
                <a href="mailto:info@artvillagedesign.com">Drop us a line</a>
            </div>
            <div>
                <b>call</b>
                <span>
					<a href="tel:+971585657497">+971 58 565 7497</a>					<a href="tel:+971043818733">+971 04 381 8733</a>
				</span>
                <a href="https://artvillagedesign.com/modals/?type=callback" class="open-modal">Request a call back</a>
            </div>
            <div>
                <b>come</b>
                <span>
					<a>FROM 10:00AM TO 7:00PM</a>				</span>
                <a href="https://artvillagedesign.com/modals/?type=meet" class="open-modal">Make an appointment</a>
            </div>
        </div>
        <div class="ctn-tt">
            <h4>Follow us</h4>
        </div>
        <div class="nav-cnt-soc">
            <a href="https://www.youtube.com/channel/UCKtXGDV4ZyVnbc-6Okygn2g" target="_blank"><i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="32" viewBox="0 0 47 32" fill="none"
                         class="svg" src="https://artvillagedesign.com/wp-content/themes/artvillage/images/n-yt.svg">
                        <path
                            d="M45.4137 26.8782C44.8793 28.8158 43.3131 30.3431 41.3269 30.8649C37.6984 31.8333 23.184 31.8333 23.184 31.8333C23.184 31.8333 8.67016 31.8333 5.04162 30.9016C3.09363 30.3804 1.48922 28.8155 0.954892 26.8782C0 23.3392 0 15.9999 0 15.9999C0 15.9999 0 8.62362 0.954892 5.12166C1.48979 3.18435 3.05543 1.65697 5.04191 1.13524C8.70836 0.166586 23.1846 0.166586 23.1846 0.166586C23.1846 0.166586 37.6984 0.166586 41.3269 1.09825C43.3134 1.61971 44.8793 3.14709 45.4142 5.0844C46.3689 8.62362 46.3689 15.9627 46.3689 15.9627C46.3689 15.9627 46.4071 23.3392 45.4137 26.8782ZM18.5629 9.21961V22.7802L30.6324 15.9999L18.5629 9.21961Z"
                            fill="#CCA766"></path>
                    </svg>
                </i>
                <p>Youtube</p></a> <a href="https://www.facebook.com/artvillagedesign/" target="_blank"><i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="38" viewBox="0 0 19 38" fill="none"
                         class="svg" src="https://artvillagedesign.com/wp-content/themes/artvillage/images/n-fb.svg">
                        <path
                            d="M15.5312 6.30958H19V0.267583C18.4016 0.18525 16.3434 0 13.9464 0C8.94509 0 5.51904 3.14608 5.51904 8.92842V14.25H0V21.0045H5.51904V38H12.2856V21.0061H17.5815L18.4221 14.2516H12.2841V9.59817C12.2856 7.64592 12.8113 6.30958 15.5312 6.30958Z"
                            fill="#CCA766"></path>
                    </svg>
                </i>
                <p>Facebook</p></a> <a href="https://www.instagram.com/artvillagedesign/" target="_blank"><i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none"
                         class="svg" src="https://artvillagedesign.com/wp-content/themes/artvillage/images/n-is.svg">
                        <path
                            d="M37.8962 11.1721C37.8072 9.15304 37.4807 7.76494 37.0129 6.56212C36.5304 5.28537 35.7881 4.14229 34.8155 3.19204C33.8652 2.227 32.7146 1.47713 31.4527 1.00215C30.2429 0.534423 28.862 0.207912 26.8429 0.11889C24.8088 0.022328 24.163 0 19.0038 0C13.8445 0 13.1988 0.022328 11.1721 0.11135C9.15304 0.200372 7.76494 0.527174 6.56241 0.994613C5.28537 1.47713 4.14229 2.21947 3.19204 3.19204C2.227 4.14229 1.47742 5.2929 1.00215 6.55487C0.534423 7.76494 0.207912 9.14551 0.11889 11.1646C0.022328 13.1988 0 13.8445 0 19.0038C0 24.163 0.022328 24.8088 0.11135 26.8354C0.200372 28.8545 0.527174 30.2426 0.994902 31.4454C1.47742 32.7222 2.227 33.8652 3.19204 34.8155C4.14229 35.7805 5.2929 36.5304 6.55487 37.0054C7.76494 37.4731 9.14551 37.7996 11.1649 37.8886C13.1912 37.978 13.8373 38 18.9965 38C24.1557 38 24.8015 37.978 26.8281 37.8886C28.8472 37.7996 30.2354 37.4731 31.4379 37.0054C33.9917 36.018 36.0108 33.9989 36.9981 31.4454C37.4656 30.2354 37.7924 28.8545 37.8814 26.8354C37.9704 24.8088 37.9927 24.163 37.9927 19.0038C37.9927 13.8445 37.9852 13.1988 37.8962 11.1721ZM34.4742 26.6869C34.3924 28.5428 34.0807 29.5449 33.8209 30.213C33.1824 31.8685 31.8685 33.1824 30.213 33.8209C29.5449 34.0807 28.5355 34.3924 26.6869 34.4739C24.6826 34.5632 24.0815 34.5853 19.0113 34.5853C13.9411 34.5853 13.3324 34.5632 11.3354 34.4739C9.47956 34.3924 8.4774 34.0807 7.8093 33.8209C6.98549 33.5164 6.23561 33.0339 5.62696 32.4029C4.99597 31.7867 4.51345 31.0444 4.20898 30.2206C3.94916 29.5525 3.63744 28.5428 3.55596 26.6945C3.46665 24.6902 3.44461 24.0888 3.44461 19.0186C3.44461 13.9484 3.46665 13.3397 3.55596 11.3429C3.63744 9.4871 3.94916 8.48494 4.20898 7.81684C4.51345 6.99273 4.99597 6.24315 5.63449 5.6342C6.2504 5.00322 6.99273 4.5207 7.81684 4.21652C8.48494 3.9567 9.49463 3.64498 11.3429 3.56321C13.3472 3.47418 13.9486 3.45186 19.0186 3.45186C24.0963 3.45186 24.6974 3.47418 26.6945 3.56321C28.5503 3.64498 29.5525 3.9567 30.2206 4.21652C31.0444 4.5207 31.7943 5.00322 32.4029 5.6342C33.0339 6.2504 33.5164 6.99273 33.8209 7.81684C34.0807 8.48494 34.3924 9.49434 34.4742 11.3429C34.5632 13.3472 34.5855 13.9484 34.5855 19.0186C34.5855 24.0888 34.5632 24.6826 34.4742 26.6869Z"
                            fill="#CCA766"></path>
                        <path
                            d="M19.0038 9.24207C13.6146 9.24207 9.24207 13.6143 9.24207 19.0038C9.24207 24.3932 13.6146 28.7655 19.0038 28.7655C24.3932 28.7655 28.7655 24.3932 28.7655 19.0038C28.7655 13.6143 24.3932 9.24207 19.0038 9.24207ZM19.0038 25.3359C15.5075 25.3359 12.6716 22.5003 12.6716 19.0038C12.6716 15.5073 15.5075 12.6716 19.0038 12.6716C22.5003 12.6716 25.3359 15.5073 25.3359 19.0038C25.3359 22.5003 22.5003 25.3359 19.0038 25.3359Z"
                            fill="#CCA766"></path>
                        <path
                            d="M31.4306 8.85611C31.4306 10.1146 30.4102 11.135 29.1514 11.135C27.8929 11.135 26.8725 10.1146 26.8725 8.85611C26.8725 7.59733 27.8929 6.5772 29.1514 6.5772C30.4102 6.5772 31.4306 7.59733 31.4306 8.85611Z"
                            fill="#CCA766"></path>
                    </svg>
                </i>
                <p>Instagram</p></a> <a href="https://www.pinterest.com/artvillagedubai/" target="_blank"><i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="38" viewBox="0 0 31 38" fill="none"
                         class="svg" src="https://artvillagedesign.com/wp-content/themes/artvillage/images/n-pr.svg">
                        <path
                            d="M15.9541 0C5.53893 0 0 6.67405 0 13.9514C0 17.3264 1.8859 21.5351 4.90475 22.8699C5.36316 23.0765 5.61256 22.9887 5.71469 22.5635C5.80495 22.2405 6.2016 20.6848 6.39399 19.9509C6.45337 19.7158 6.42249 19.5115 6.23248 19.2906C5.23015 18.1316 4.43447 16.0201 4.43447 14.0393C4.43447 8.96366 8.4699 4.03531 15.3366 4.03531C21.2745 4.03531 25.4287 7.89248 25.4287 13.4099C25.4287 19.6445 22.1296 23.9577 17.8424 23.9577C15.4696 23.9577 13.7024 22.0956 14.263 19.7918C14.9399 17.0485 16.2676 14.0986 16.2676 12.1202C16.2676 10.346 15.2653 8.87815 13.2179 8.87815C10.8023 8.87815 8.84281 11.2699 8.84281 14.481C8.84281 16.5212 9.56486 17.8988 9.56486 17.8988C9.56486 17.8988 7.17543 27.5512 6.73127 29.354C5.98071 32.406 6.8334 37.3486 6.90703 37.7737C6.95216 38.0088 7.21581 38.0825 7.36307 37.8901C7.59821 37.5813 10.4864 33.4605 11.2964 30.4821C11.5909 29.3967 12.7999 24.9956 12.7999 24.9956C13.5955 26.4326 15.8923 27.6368 18.3388 27.6368C25.6163 27.6368 30.875 21.2406 30.875 13.303C30.8489 5.69313 24.3361 0 15.9541 0Z"
                            fill="#CCA766"></path>
                    </svg>
                </i>
                <p>Pinterest</p></a> <a href="https://linkedin.com/company/art-village-event-design" target="_blank"><i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="35" viewBox="0 0 31 35" fill="none"
                         class="svg" src="https://artvillagedesign.com/wp-content/themes/artvillage/images/n-in.svg">
                        <path
                            d="M29.9941 29.9996V29.9984H30.0016V18.9957C30.0016 13.6131 28.8428 9.4668 22.5505 9.4668C19.5256 9.4668 17.4956 11.1268 16.6669 12.7006H16.5794V9.96931H10.6133V29.9984H16.8256V20.0807C16.8256 17.4694 17.3206 14.9444 20.5543 14.9444C23.7405 14.9444 23.788 17.9244 23.788 20.2482V29.9996H29.9941Z"
                            fill="#CCA766"></path>
                        <path d="M0.496094 9.9707H6.71594V29.9998H0.496094V9.9707Z" fill="#CCA766"></path>
                        <path
                            d="M3.60241 0C1.61371 0 0 1.61378 0 3.60257C0 5.59135 1.61371 7.23888 3.60241 7.23888C5.59111 7.23888 7.20482 5.59135 7.20482 3.60257C7.20357 1.61378 5.58986 0 3.60241 0V0Z"
                            fill="#CCA766"></path>
                    </svg>
                </i>
                <p>LinkedIn</p></a>
        </div>
        <div class="ctn-tt">
            <h4>Visit Us in our Dubai Office</h4>
            <p>17, The Iridium Building - Umm Suqeim St, Al Barsha, P. O. Box 454766 - Dubai</p>
        </div>

        </div>
        <script type="text/javascript">
            window.onload = function () {
                var locations = [
                    ["Dubai", 25.1186728, 55.2071424],
                ];
                var map = new google.maps.Map(document.getElementById('maps'), {
                    zoom: 14,
                    center: new google.maps.LatLng(25.1186728, 55.2071424),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                var infowindow = new google.maps.InfoWindow();
                var marker, i;

                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                    });
                }
            }
        </script>
    </section>
    <section class="lsr">
        <div class="title">
            <h2>LET'S START</h2>
            <p>We'd love to hear from you</p>
        </div>
        <form action="https://artvillagedesign.com/wp-admin/admin-ajax.php" class="ajax-form black" method="post"
              enctype="multipart/form-data">
            <input type="hidden" name="action" value="ajax_order">
            <input type="hidden" name="pageID" value="71">
            <input type="hidden" name="type" value="1712">
            <div class="lsr-fa">
                <div class="fancy-select"><select name="subject" class="fancified"
                                                  style="width: 1px; height: 1px; display: none; position: absolute; top: 0px; left: 0px; opacity: 0;">
                        <option value="">Inquiry Type</option>
                        <option value="Full Event Planning">Full Event Planning</option>
                        <option value="Design &amp; Decor">Design &amp; Decor</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Anniversary">Anniversary</option>
                        <option value="Corporate Event">Corporate Event</option>
                        <option value="Kids Parties &amp; Showers">Kids Parties &amp; Showers</option>
                        <option value="Seasonal Parties">Seasonal Parties</option>
                        <option value="Photo &amp; Video">Photo &amp; Video</option>
                        <option value="Enternainment">Enternainment</option>
                        <option value="Stationary">Stationary</option>
                        <option value="Brand Collaboration">Brand Collaboration</option>
                        <option value="Partners &amp; Suppliers">Partners &amp; Suppliers</option>
                        <option value="Just to say hi!">Just to say hi!</option>
                    </select>
                    <div class="trigger">Inquiry Type</div>
                    <ul class="options">
                        <li data-raw-value="Full Event Planning">Full Event Planning</li>
                        <li data-raw-value="Design &amp; Decor">Design &amp; Decor</li>
                        <li data-raw-value="Wedding">Wedding</li>
                        <li data-raw-value="Anniversary">Anniversary</li>
                        <li data-raw-value="Corporate Event">Corporate Event</li>
                        <li data-raw-value="Kids Parties &amp; Showers">Kids Parties &amp; Showers</li>
                        <li data-raw-value="Seasonal Parties">Seasonal Parties</li>
                        <li data-raw-value="Photo &amp; Video">Photo &amp; Video</li>
                        <li data-raw-value="Enternainment">Enternainment</li>
                        <li data-raw-value="Stationary">Stationary</li>
                        <li data-raw-value="Brand Collaboration">Brand Collaboration</li>
                        <li data-raw-value="Partners &amp; Suppliers">Partners &amp; Suppliers</li>
                        <li data-raw-value="Just to say hi!">Just to say hi!</li>
                    </ul>
                </div>
                <div class="fancy-select"><select name="method" class="fancified"
                                                  style="width: 1px; height: 1px; display: none; position: absolute; top: 0px; left: 0px; opacity: 0;">
                        <option value="">Contact Method</option>
                        <option value="Email">Email</option>
                        <option value="Phone">Phone</option>
                        <option value="Whatsapp">Whatsapp</option>
                    </select>
                    <div class="trigger">Contact Method</div>
                    <ul class="options">
                        <li data-raw-value="Email">Email</li>
                        <li data-raw-value="Phone">Phone</li>
                        <li data-raw-value="Whatsapp">Whatsapp</li>
                    </ul>
                </div>
                <div class="qi">
                    <input type="text" name="name" value="" required="">
                    <i><img src="./Contact us _ Art Village_files/y-name.svg"></i>
                    <label>Name</label>
                </div>
                <div class="qi">
                    <input type="text" name="phone" required="">
                    <i><img src="./Contact us _ Art Village_files/y-phone.svg"></i>
                    <label>Phone number</label>
                </div>
                <div class="qi">
                    <input type="text" name="email" value="" required="">
                    <i><img src="./Contact us _ Art Village_files/y-email.svg"></i>
                    <label>E-mail</label>
                </div>
            </div>
            <div class="qt">
				<textarea name="text" placeholder="We can&#39;t wait to start creating your event!
Tell us more details like:
- Preferred Date(s)
- Location
- Approximate number of guests
- Occasion and purpose
- Theme and colors, if you already have an idea
- Your vision of the event and any additional information that can help us provide the best service for you"></textarea>
                <i><img src="./Contact us _ Art Village_files/y-text.svg"></i>
                <p>We can't wait to start creating your event!<br>
                    Tell us more details like:<br>
                    - Preferred Date(s)<br>
                    - Location<br>
                    - Approximate number of guests<br>
                    - Occasion and purpose<br>
                    - Theme and colors, if you already have an idea<br>
                    - Your vision of the event and any additional information that can help us provide the best service
                    for you</p>
            </div>
            <div class="qf">
                <input type="file" name="file">
                <label data-alt="Attach file">Attach file</label>
                <i></i>
            </div>
            <button class="link">Send request</button>
            <a href="https://artvillagedesign.com/confidentiality-policy/">By using this form you give consent to the
                processing of personal information. Learn more here.</a>
        </form>
    </section>
@endsection
