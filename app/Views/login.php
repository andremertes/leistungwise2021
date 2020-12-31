<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-sign-in-alt icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Login</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-lg-3"></div>
                <div class="col-md-6 col-lg-6">
                    <div class="card-shadow-danger card">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper pt-5">
                                    <div class="widget-content-right w-100">
                                        <div class="widget-numbers mt-0 fsize-3 text-danger text-center">Login</div>

                                            <div class="card-body">
                                                <?= form_open('login/index', array('role' => 'form')) ?>
                                                <!-- <form action="login/login" method="post"> -->
                                                <!-- <form class="needs-validation" novalidate> -->
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="username">ZIMK-Kennung</label>
                                                            <input type="text" class="form-control" id="username" name="username" placeholder="s4johdoe" aria-describedby="inputGroupPrepend" required>
                                                            <div class="invalid-feedback">
                                                                ZIMK-Kennung eingeben
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="password">Passwort</label>
                                                            <input type="password" class="form-control" id="password" name="password" placeholder="Passwort" required>
                                                            <div class="invalid-feedback">
                                                                Passwort eingeben
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-outline-danger" type="submit" id="btnsubmit">Login</button>
                                                </form>

                                                <script>
                                                    (function() {
                                                        'use strict';
                                                        window.addEventListener('load', function() {
                                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                            var forms = document.getElementsByClassName('needs-validation');
                                                            // Loop over them and prevent submission
                                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                                form.addEventListener('submit', function(event) {
                                                                    if (form.checkValidity() === false) {
                                                                        event.preventDefault();
                                                                        event.stopPropagation();
                                                                    }
                                                                    form.classList.add('was-validated');
                                                                }, false);
                                                            });
                                                        }, false);
                                                    })();
                                                </script>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
