<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Customer Profile</title>
    <link rel="Abans favi icon" href="img/favicon.ico">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/media.css">
    <!-- date piker CSS -->
    <!-- <link href="bootstrap/css/gijgo.min.css" rel="stylesheet" type="text/css" />-->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body data-spy="scroll" data-target="#navbar-example" data-offset="70">
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>
<div class="customer-profile">
    <!--nav bar -->
    <div>
        <nav id="navbar-example" class="navbar navbar-expand-lg fixed-top navbar-light bg-color-white navbar-shadow">
            <a class="navbar-brand" href="#"><img src="img/abans-logo.png" alt="Abans logo"></a>
            <button class="navbar-toggler d-none" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item d-none d-sm-block">
                        <span class="nav-link" href="#permenent"><i class="fa fa-user-circle-o pr-2"></i>Mahela Jayawardhana</span>
                    </li>

                    <!--                    <li class="nav-item">-->
                    <!--                        <a class="nav-link" href="#present">Present</a>-->
                    <!--                    </li>-->
                    <!--                    <li class="nav-item">-->
                    <!--                        <a class="nav-link" href="#working-place">Working place</a>-->
                    <!--                    </li>-->
                    <!--                    <li class="nav-item">-->
                    <!--                        <a class="nav-link" href="#tax-details">Tax details</a>-->
                    <!--                    </li>-->
                </ul>
            </div>
        </nav>
    </div>
    <!--//nav bar -->
    <div data-spy="scroll" data-target="#navbar-example" data-offset="70" >
        <!--hero -->
        <div class="hero-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <h1 class="main-topic text-white d-inline float-left padding-new1">Customer profile</h1>
                            <!--                            <i class="fa fa-gear d-none d-sm-block"></i>-->
                            <span class="gear text-right d-inline float-right padding-new2"><img src="img/user.png" alt="icon image"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//hero -->
        <!--main form -->
        <div class="forms-main">
            <div class="container pt-2">
                <div class="details-form ">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="nav-item d-block d-sm-none">
                                <span class="nav-link p-0" href="#permenent"><i class="fa fa-user-circle-o pr-2"></i>Mahela Jayawardhana</span>
                            </div>
                            <div class="profile-progress-bar mt-4 mb-4">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                                <label class="progress-status"><span>Your profile is 50% completed.</span></label>
                            </div>
                            <form class="needs-validation" novalidate>
                                <div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">Code</label>
                                            <input type="text" class="form-control" id="code" placeholder="" value="" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">BR no</label>
                                            <input type="text" class="form-control" id="br-no" placeholder="" value="" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">NIC number</label>
                                            <input type="text" class="form-control" id="nic-no" placeholder="" value="" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">Passport</label>
                                            <input type="text" class="form-control" id="passport" placeholder="" value="" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">Mobile</label>
                                            <input type="text" class="form-control" id="mobile" placeholder="" value="" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control" id="phone" placeholder="" value="" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">DL</label>
                                            <input type="text" class="form-control" id="dl" placeholder="" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div>
                                    <h5 class="mb-3">Personal details</h5>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="country">Title</label>
                                            <select class="custom-select d-block w-100" id="country" required>
                                                <option value="">Choose...</option>
                                                <option>Mr</option>
                                                <option>Mrs</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="country">Sex</label>
                                            <select class="custom-select d-block w-100" id="country" required>
                                                <option value="">Choose...</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">Date of birth</label>
                                            <!--                                        <input type="text" class="form-control" id="nic-no" placeholder="" value="" required>-->
                                            <input id="datepicker" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">Initials</label>
                                            <input type="text" class="form-control" id="initials" placeholder="" value="" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">First name</label>
                                            <input type="text" class="form-control" id="first-name" placeholder="" value="" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">Sur name</label>
                                            <input type="text" class="form-control" id="sur-name" placeholder="" value="" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-2">
                                            <label for="">Name in full</label>
                                            <input type="text" class="form-control" id="name-full" placeholder="" value="" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-4">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">Pref. language</label>
                                            <input type="text" class="form-control" id="pref-language" placeholder="" value="" required>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                            <label for="">Restrict notification alert</label>
                                            <div class="pt-2">
                                                <div class="custom-control custom-radio d-inline pr-2">
                                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                                    <label class="custom-control-label" for="credit">SMS</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline">
                                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                                    <label class="custom-control-label" for="debit">E-Mail</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-views mt-5">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-permenent-tab" data-toggle="tab" href="#nav-permenent" role="tab" aria-controls="nav-permenent" aria-selected="true">Permenent</a>
                                            <a class="nav-item nav-link" id="nav-present-tab" data-toggle="tab" href="#nav-present" role="tab" aria-controls="nav-present" aria-selected="false">Present</a>
                                            <a class="nav-item nav-link" id="nav-working-place-tab" data-toggle="tab" href="#nav-working-place" role="tab" aria-controls="nav-working-place" aria-selected="false">Working place</a>
                                            <a class="nav-item nav-link" id="nav-tax-details-tab" data-toggle="tab" href="#nav-tax-details" role="tab" aria-controls="nav-tax-details" aria-selected="false">Tax details</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content mt-4" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-permenent" role="tabpanel" aria-labelledby="nav-permenent-tab">
                                            <div id="permenent">
                                                <!--                                                <h5 class="mb-3">Permenent</h5>-->
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-12 mb-2">
                                                        <label for="country">Address</label>
                                                        <input type="text" class="form-control" id="address" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label class="d-none d-sm-block" style="opacity: 0;" for="country">Address</label>
                                                        <input type="text" class="form-control" id="address" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Town</label>
                                                        <input type="text" class="form-control" id="town" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">District</label>
                                                        <input type="text" class="form-control" id="district" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Postal code</label>
                                                        <input type="text" class="form-control" id="postal-code" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Province</label>
                                                        <input type="text" class="form-control" id="province" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Country</label>
                                                        <input type="text" class="form-control" id="country" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Email</label>
                                                        <input type="email" class="form-control" id="email" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-present" role="tabpanel" aria-labelledby="nav-present-tab">
                                            <div id="present">
                                                <!--                                                <h5 class="mb-3">Present</h5>-->
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-12 mb-2">
                                                        <label for="country">Address</label>
                                                        <input type="text" class="form-control" id="address" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label class="d-none d-sm-block" style="opacity: 0;" for="country">Address</label>
                                                        <input type="text" class="form-control" id="address" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Town</label>
                                                        <input type="text" class="form-control" id="town" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">District</label>
                                                        <input type="text" class="form-control" id="district" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Postal code</label>
                                                        <input type="text" class="form-control" id="postal-code" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Province</label>
                                                        <input type="text" class="form-control" id="province" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Country</label>
                                                        <input type="text" class="form-control" id="country" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Phone</label>
                                                        <input type="text" class="form-control" id="phone" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-working-place" role="tabpanel" aria-labelledby="nav-working-place-tab">
                                            <div id="working-place">
                                                <!--                                                <h5 class="mb-3">Working place</h5>-->
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-2">
                                                        <label for="country">Name</label>
                                                        <input type="text" class="form-control" id="name" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-2">
                                                        <label for="country">Address</label>
                                                        <input type="text" class="form-control" id="address" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Department</label>
                                                        <input type="text" class="form-control" id="town" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Phone</label>
                                                        <input type="text" class="form-control" id="phone" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Designation</label>
                                                        <input type="text" class="form-control" id="designation" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mb-2">
                                                        <label for="">Fax</label>
                                                        <input type="text" class="form-control" id="fax" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-12 mb-2">
                                                        <label for="">Email</label>
                                                        <input type="text" class="form-control" id="email" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-tax-details" role="tabpanel" aria-labelledby="nav-tax-details-tab">
                                            <div id="tax-details">
                                                <!--                                                <h5 class="mb-3">Tax details</h5>-->
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-2">
                                                        <div class="form-check form-check-inline pr-3">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">VAT Customer</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">VAT Extempted</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-10 col-lg-10 col-md-10 col-12 mb-2">
                                                        <label for="">VAT reg.</label>
                                                        <input type="text" class="form-control" id="vat-reg" placeholder="" value="" required>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-2 col-md-2 col-12 mb-2">
                                                        <div class="form-check form-check-inline pt-4">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            <label class="form-check-label" for="inlineCheckbox2">SVAT customer</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-10 col-lg-10 col-md-10 col-12 mb-2">
                                                        <label for="">SVAT reg.</label>
                                                        <input type="text" class="form-control" id="svat-reg" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary bg-color-purpul float-right mt-4" type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//main form -->
        <!--footer -->
        <footer class="pt-5 text-muted text-center text-small">
            <div class="pt-3">
                <p>Made with ❤ by <a href="https://www.facebook.com/siriuslife/" target="_blank">Sirius Technologies Service (Pvt) Ltd</a></p></div>
        </footer>
        <!--//footer -->
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="bootstrap/js/jquery-3.4.1.slim.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/gijgo.min.js" type="text/javascript"></script>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    //page reload top view
    $(document).ready(function(){
        $(this).scrollTop(0);
    });

</script>
</body>
</html>
