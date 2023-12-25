<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Faqs frequently asked questions with tabs - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style type="text/css">

body{
    background-color:#eee;
    margin-top:20px;
}
.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}
.nav-tabs-custom .nav-item .nav-link.active {
    color: #6c6ff5;
}
.nav-tabs-custom .nav-item .nav-link {
    border: none;
}
.text-muted {
    color: #8ca3bd!important;
}
.nav-tabs-custom .nav-item {
    position: relative;
    color: #271050;
}
.nav-tabs-custom .nav-item .nav-link.active:after {
    -webkit-transform: scale(1);
    transform: scale(1);
}
.nav-tabs-custom .nav-item .nav-link::after {
    content: "";
    background: #6c6ff5;
    height: 2px;
    position: absolute;
    width: 100%;
    left: 0;
    bottom: -1px;
    -webkit-transition: all 250ms ease 0s;
    transition: all 250ms ease 0s;
    -webkit-transform: scale(0);
    transform: scale(0);
}
#faq-form{
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    background-color: #fff;

}
#question-input{
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease-in-out;
}
#question-input:focus {
    outline: none;
    border-color: #007bff;
}
</style>
</head>
<body>
    <?php 
      include "header.php";
    ?>
<div class="container">
<div class="row">
      <div class="col-lx-12">
          <div class="card">
              <div class="card-body">
                
                <!-- end row -->
                <div class="row justify-content-center mt-5">
                    <div class="col-9">
                        <ul class="nav nav-tabs  nav-tabs-custom nav-justified justify-content-center faq-tab-box" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-genarel-tab" data-bs-toggle="pill" data-bs-target="#pills-genarel" type="button" role="tab" aria-controls="pills-genarel" aria-selected="true">
                                    <span class="font-size-16">General Questions</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-privacy_policy-tab" data-bs-toggle="pill" data-bs-target="#pills-privacy_policy" type="button" role="tab" aria-controls="pills-privacy_policy" aria-selected="false">
                                    <span class="font-size-16">Privacy Policy</span>
                                </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-teachers-tab" data-bs-toggle="pill" data-bs-target="#pills-pricing_plan" type="button" role="tab" aria-controls="pills-pricing_plan" aria-selected="false">
                                    
                                    <span class="font-size-16">Pricing &amp; Plans</span>
                                </button>
                              </li>
                          </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content pt-3" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-genarel" role="tabpanel" aria-labelledby="pills-genarel-tab">
                                <div class="row g-4 mt-2">
                                    <div class="col-lg-6">
                                        <h5>How do I schedule a legal consultation?</h5>
                                    <p class="text-muted">Scheduling a consultation is easy. You can fill out the appointment  form on our website, or simply give us a call at our provided contact number. Our team will then reach out to confirm the details and timing of the consultation.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>What areas of law do you specialize in?</h5>
                                        <p class="text-muted">TWe specialize in various areas of law including family law, criminal law, civil law, corporate law, property law, and immigration law. Our team of experienced lawyers is well-equipped to provide legal guidance in these and other relevant fields.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Where does it come from ?</h5>
                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple 
                                        and regular than that of the individual languages. The new common language will be more simple and 
                                        regular than the existing
                                    </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>How does the legal consultation process work?</h5>
                                        <p class="lg-base">the consultation process is simple. You can reach out to us through our website or contact number to schedule a consultation. During the consultation, you'll have the opportunity to discuss your legal concerns with one of our qualified attorneys who will provide insights, advice, and potential solutions. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-privacy_policy" role="tabpanel" aria-labelledby="pills-privacy_policy-tab">
                                <div class="row g-4 mt-2">
                                    <div class="col-lg-6">
                                        <h5> Is my consultation confidential?</h5>
                                        <p class="lg-base"> Yes, your consultation is completely confidential. We adhere to strict ethical standards and ensure that your personal and legal information remains private.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5> How do you handle my personal and sensitive information?</h5>
                                        <p class="lg-base">We take your privacy seriously. Your personal and sensitive information is stored securely and is only accessible to authorized personnel. We follow industry best practices to ensure the confidentiality and integrity of your data.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5> Do you share client information with third parties?</h5>
                                        <p class="lg-base">We do not share client information with third parties for marketing purposes. In certain cases, with your consent, we may collaborate with other legal professionals or experts to better serve your needs. However, your information remains protected under our privacy policy.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>How do you ensure the security of my personal data in compliance with privacy regulations?</h5>
                                        <p class="lg-base">We prioritize the security of your personal data in accordance with relevant privacy regulations. Our systems and practices are designed to safeguard your information from unauthorized access, disclosure, or loss. We regularly update our security measures to meet industry standards, conduct data audits, and ensure that our staff is trained in data protection protocols. Our commitment to your privacy is unwavering, and your personal data is handled with the utmost care and security.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-pricing_plan" role="tabpanel">
                                <div class="row g-4 mt-4">
                                    <div class="col-lg-6">
                                        <h5>How much does a legal consultation cost?</h5>
                                    <p class="lg-base">We offer an initial free consultation to understand your case and needs. If further legal assistance is required, our team will discuss the cost structure, which varies depending on the complexity of the case. We are committed to transparent pricing and ensuring you know the fees involved.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Do you offer fixed-price packages for specific legal matters?</h5>
                                        <p class="lg-base">Yes, we offer fixed-price packages for certain legal services such as drafting contracts, wills, and basic legal consultations. These packages provide a clear understanding of the costs involved upfront, ensuring you have a budget-friendly option for your legal needs.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Are there any hidden charges or additional fees I should be aware of?</h5>
                                    <p class="lg-base">We are committed to transparency in pricing. Any additional charges, such as court fees or filing fees, will be clearly communicated to you before they are incurred. We prioritize open communication and ensure you're fully informed about the cost implications of your case.</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h5>Can you provide an estimate of the total cost before I decide to proceed with your legal services?</h5>
                                        <p class="lg-base">Certainly. We understand the importance of knowing the potential costs involved. During your initial free consultation, we will discuss the details of your case and provide you with a preliminary estimate of the total cost. As your case progresses, we will keep you informed about any adjustments to the estimate and ensure you have a clear understanding of the financial aspect of your legal matter.</p>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row justify-content-center mt-4">
                    <div class="col-xl-5 col-lg-8">
                        <div class="text-center">
                            <h3>Frequently Asked Questions?</h3>
                            <p class="text-muted">Didn't find your question? Ask you question...</p>
                            <form id="faq-form">
                                <input type="text" id="question-input" placeholder="Type your question...">
                                <button type="submit">Ask</button>
                            </form>
                            </div>
                    </div>
                    <!-- end col -->
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
<?php 
  include "footer.php";
?>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>