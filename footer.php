<footer id="footer">
    <div class="footer-container">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="text-block">
                        <p><?php echo get_field('footer_text', 'option'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 clearfix">
                    <nav class="footer-nav">
                        <?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location'  => 'footer_menu_top')); ?>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="text-block">
                        <p><?php echo get_field('footer_copyright_info', 'option'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 clearfix">
                    <nav class="footer-nav">
                        <?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location'  => 'footer_menu_bottom')); ?>
                        <span class="by">by Ai</span>
                    </nav>
                </div>  
            </div>
        </div>
    </div>
    <div class="modal fade" id="notice" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="text">
                <h4>Important Notice</h4>
            </div>
        </div>
        <div class="modal-body">
            <p>This site is provided by Carlisle Management SCA (hereafter “Carlisle”) as a reference service to institutional and professional investors. No investment advice is offered or given by Carlisle to any persons accessing information on this site; consequently, prospective investors should take advice from their own professional advisers before making any investment decision. The following information applies to every page on this website, whether or not such pages individually contain a disclaimer notification. You agree that you have to read and understand the information contained on this page and confirm that you are eligible to read the documents posted on the website before you enter it. Any information featuring on this website has been thoroughly researched by Carlisle. However, Carlisle does not in any way guarantee or warrant, either implicitly or explicitly, the completeness or accuracy of the information posted on this site.</p>
            <p> <strong>Registration:</strong> This website should not be regarded as an offer or solicitation to invest in the Funds in any jurisdiction where such activity is unlawful. This website is not directed at you if the Funds is prohibited by any law of any jurisdiction from making the information on this site available to you and is not intended for any use which would be contrary to local law or regulation. You should proceed into this site only if you have satisfied yourself that the country in which you are based imposes no prohibitions or restrictions on the distribution of the promotional material on this site.</p>
            <p><strong>General:</strong> The information on this website is issued by Carlisle.Before investing, all relevant documents, such as reports and accounts and prospectus should be read, which specify the particular risks associated with investment in the Funds, together with any specific restrictions applying and the basis of dealing. The information herein is not an offer to sell, or to solicit an offer to purchase any securities, anyone in any jurisdiction in which such offer or solicitation is not authorized, or in which the person making such an offer is not qualified to do so, or to anyone to whom it is unlawful to make such an offer or solicitation, or to anyone in any jurisdiction inside of the United States. The value of any investments and any income generated may go down as well as up and is not guaranteed. Past performance is not a guide to future performance. Changes in rates of exchange may have an adverse effect on the value, price or in income of an investment.</p>
            <p><strong>Additional Risk Warnings:</strong> Investment in a Fund is not intended to be a complete investment program for any investor. An investment should be viewed as a medium to long –term investment. The nature of a Fund’s investments involves certain risks and a Fund may utilize investment techniques (such as the use of leverage and short selling) which may carry additional risks. Prospective investors should carefully consider, among others, the following factors before subscribing: Potential Concentration of Investments, Counterparty Risk, Foreign Exchange/Exchange Control Risks, Settlement Risk, Currency exposure/Unlisted securities and Derivatives Risks; Inadequate Market, Liquidity and Leverage. Please refer to the prospectus for further information. An investment in a Fund therefore carries substantial risk and is suitable only for persons who can assume the risk of losing their entire investment.</p>
            <p><strong>Privacy Policy & Data Protection: </strong>Any personal information you provide to Carlisle, which is the data controller, through any of the contact facilities on this site or by any other means whatsoever will be held in accordance with our Data Protection Policy set out below. Whilst we take reasonable steps to ensure the security of personal data transmitted through this website, by accepting these terms and conditions you accept that the Internet is not a totally secure medium of communication of information and that such transmission will be at your own risk. Data Protection Policy: the relevant companies within the Carlisle process and store personal data in accordance with the requirements of the Data Protection Law. Any personal information you supply will be used primarily to answer your inquiry or to fulfill any of our contractual obligations to you. Personal data will not be held longer that is reasonably necessary. Consequent upon the way we organize our business, personal data may also be used for: operational and administrative purposes, and may be shared with companies within the Carlisle group. The companies within Carlisle may be located in countries outside of the European Union which may not offer a level of protection equivalent to that of the Data Protection Law. Personal information supplied by you may on occasion be used for research and analysis purposes but it will not be released to non associated third parties unless there is a legal or regulatory reason to do so or unless the third party fulfils a service on our behalf. Personal information will not be used for marketing purposes. You have the right to access your personal data and may ask for a rectification thereof in cases where such personal data is inaccurate and/or incomplete. In this regard, you may contact us via .Whenever info@carlislemanagementcompany.com you supply personal data to Carlisle concerning a third party you must ensure that the supply is in accordance with the applicable data protection laws, that where necessary, you have that persons consent to supply the information, and that this Policy has been brought to their attention. By agreeing to these Terms and Conditions, you consent to the processing of the personal data you supply Carlisle with in accordance with our data protection policy.</p>
            <p><strong>Applicable Law:</strong> The website you will enter in after accepting the following conditions is subject to Luxembourg law. Any disputes arising from the website shall be submitted to the courts Luxembourg-city (Grand Duchy of Luxembourg).</p>
        </div>
        <div class="modal-footer">
            <div class="accept">
               <p>Please tick that you have understood and accept the important notice set above and agree to the matters addressed in it.</p>
               <p><input type="checkbox"  id="tick" onchange="document.getElementById('terms').disabled = !this.checked;" />
                   <label for="tick"></label>
               </p>
           </div>
           <button type="button" class="agree-btn"  name="terms" disabled id="terms" data-dismiss="modal">I AGREE</button>
           <a href="https://www.google.com/" class="discard-btn">I Disagree</a>
       </div>
   </div>
</div>
</div>

<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close-modal" data-dismiss="modal">
            <i class="fas fa-times"></i>
        </span>
        <div class="text">
            <h4>Contact Us</h4>
        </div>
    </div>
    <div class="modal-body">
        <div class="contact-box-form">
            <div class="contact-form">
                <form action="">
                    <input class="form-control" type="text" placeholder="First Name">
                    <input class="form-control" type="text" placeholder="LAST Name">
                    <input class="form-control" type="text" placeholder="Email">
                    <input class="form-control" type="text" placeholder="Telephone">
                    <input class="form-control" type="text" placeholder="Type of Inquiry">
                    <textarea class="form-control textarea" name="" id="" placeholder="Comments"></textarea>
                </form>
                <span>
                    <input type="checkbox" id="test1"  checked="checked" />
                    <label for="test1">Request Funds Overview</label>
                </span>
                <div>
                    <input type="checkbox" id="test2" />
                    <label for="test2">Subscribe to News & Updates</label>
                </div>
                <input class="default-btn submit-btn" type="submit" value="submit">
            </div>
        </div>
    </div>
</div>
</div>
</div>


<div class="modal fade" id="download-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close-modal" data-dismiss="modal">
            <i class="fas fa-times"></i>
        </span>
        <div class="text">
            <h4>Thank You</h4>
            <p>for requesting the following document. <span>Please complete for immediate download</span></p>
        </div>
    </div>
    <div class="modal-body">
        <div class="contact-box-form">
            <!-- <div class="contact-form">
                <form action="">
                    <input class="form-control" type="text" placeholder="FULL NAME">
                    <input class="form-control" type="text" placeholder="BUSINESS">
                    <input class="form-control" type="text" placeholder="Email">
                    <input class="form-control" type="text" placeholder="Telephone">
                    <input class="form-control" type="text" placeholder="Type of Inquiry">
                </form>
                <span>
                    <input type="checkbox" id="test1"  checked="checked" />
                    <label for="test1">Request Funds Overview</label>
                </span>
                <div>
                    <input type="checkbox" id="test2" />
                    <label for="test2">Subscribe to News & Updates</label>
                </div>
                <input class="default-btn submit-btn" type="submit" value="submit">
            </div> -->
            <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
        </div>
    </div>
</div>
</div>
</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>