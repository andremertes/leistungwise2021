<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-award icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Meine Klausuren</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4"></div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-vicious-stance">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Verbleibende Bearbeitungszeit</div>
                                <div class="widget-subheading">---</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white" id="demo"><span>
                                        <script>
                                            // Set the date we're counting down to
                                            var countDownDate = new Date("Jan 6, 2021 13:40:00").getTime();

                                            // Update the count down every 1 second
                                            var x = setInterval(function() {

                                                    // Get today's date and time
                                                    var now = new Date().getTime();

                                                    // Find the distance between now and the count down date
                                                    var distance = countDownDate - now;

                                                    // Time calculations for days, hours, minutes and seconds
                                                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                                    // Display the result in the element with id="demo"
                                                    document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

                                                    // If the count down is finished, write some text
                                                    if (distance < 0) {
                                                        clearInterval(x);
                                                        document.getElementById("demo").innerHTML = "EXPIRED";
                                                    }
                                            }, 1000);
                                        </script>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4"></div>
            </div>

            <form class="row" action="<?= base_url('dashboard/anfordern') ?>" method="post">

                <?php //var_dump($klausuren); echo $userid;

                foreach ($klausuren as $item){
                    if ($item['mitgliedID'] == $userid){

                        echo '
                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card" style="height: 180px;">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper pt-5">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <a type="button" class="btn-shadow p-1 btn btn-danger btn-sm" href="/downloads/'.$item['datei'].'" target="_blank">Download</a>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="widget-numbers mt-0 fsize-3 text-danger text-center">'.$item['name'].'</div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left fsize-1">
                                                <div class="text-muted opacity-6">'.$item['id'].'</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';

                    } else {}
                }

                ?>

                <div class="col-md-6 col-lg-3">
                    <button class="card-shadow-secondary mb-3 widget-chart widget-chart2 text-left card" style="height: 180px;" name="btnanfordern" type="submit">
                    <!-- <div class="card-shadow-secondary mb-3 widget-chart widget-chart2 text-left card" style="height: 180px;"> -->
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper pt-5">
                                    <div class="widget-content-right w-100">
                                        <div class="widget-numbers mt-0 fsize-3 text-secondary text-center btn">Neue Klausur anfordern</div>
                                        <!-- <input type="hidden" id="klausID" name="klausID" value="<?//= isset($neuekorr['id']) ? $neuekorr['id'] : ''; ?>"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                    </button>
                </div>
            </form>

            </div>
        </div>
