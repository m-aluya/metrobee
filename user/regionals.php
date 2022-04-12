<?php include_once 'fetcher.php';



?>
<style type="text/css">
    .hd {
        display: none
    }

    .form-control {
        border-radius: 1px
    }
</style>


<?php
global $link;
$user = $_SESSION['raws']['email'];
(int)$prelimScore = mysqli_fetch_assoc($link->query("select COUNT(id) as pscore from prelim where score = 0 and user = '$user'"))['pscore'];

function Notest()
{
?>
    <div class="alert alert-danger text-center">
        <strong>Regionals can only be taken on desktop computer.</strong>
    </div>
<?php }


if ($prelimScore < 20) {
    echo Inaki::alertError(
        "Your preliminary score is less than 20, <br/>hence you cannot partake in the regionals the moment."
    );
}

require_once "Mobile_Detect.php";
$detect = new Mobile_Detect;



// Any mobile device (phones or tablets).
if ($detect->isMobile()) {
    Notest();
}

// Any tablet device.
if ($detect->isTablet()) {
    Notest();
}



?>


<div class="   <?php if ($prelimScore < 20) {
                    echo 'd-none';
                }

                if ($detect->isTablet()) {
                    echo 'd-none';
                }

                if ($detect->isMobile()) {
                    echo 'd-none';
                }


                ?> container" data-ref="<?= token(); ?>">
    <div data-ref="<?= token(); ?>" class="row">
        <div class="col-md-8 col-sm-12 col-lg-8 echelon" data-hook="<?= token(); ?>">
            <div class="card shadow mb-4">
                <div data-ref="<?= token(); ?>" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-gray-600">Regionals</h6>

                </div>

                <div data-ref="<?= token(); ?>" class="card-body" style="margin-bottom: 6em; margin-top: 3em">


                    <div class="row">
                        <div class="col text-center">
                            <figure id="rightleft" data-set="<?= token(); ?>"></figure>
                            <form data-ref="<?= token(); ?>" method="GET" action="#" id="asider" style="margin-top: 5em">
                                <p id="ffg"></p>
                                <button type="button" id="igla" class="btn btn-primary long-btn"><i class='fa fa-play' aria-hiddeb='true'></i> Start</button>
                            </form>
                        </div>

                        <br />


                    </div>

                    <br />

                    <div class="row text-center">
                        <span id="timer">
                            <h3 class="text-center" id="time"></h3>
                        </span>
                    </div>
                    <div class="row">
                        <div class="col text-centerr">
                            <form class="drent" id="answerForm" style="display:none" autocomplete="off">


                                <div class="form-group">
                                    <label style="margin-bottom:0px" for="email">Enter your answer here</label>
                                    <input type="hidden" name="id" id="quid" /><input type="hidden" name="dave" value="<?= token(); ?>" />
                                    <input spellcheck="false" autocomplete="new-password" autocorrect="off" autocapitalize="off" spellcheck="false" name="ans" type="text" class="form-control" style="width:100%; text-transform: uppercase; font-weight: bolder; font-size: 27px" autofocus>
                                </div>

                                <div class="form-group">
                                    <button id="ijy" type="submit" class="btn btn-primary long-btn">Submit</button>
                                </div>
                            </form>
                        </div>




                    </div>



                </div>
            </div>


















        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card text-center">
                <div class="card-header">
                    Result
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-left">Attempted</th>
                                <td id="demanddfa" style="font-weight:bolder"></td>
                            </tr>


                            <tr>
                                <th scope="row" class="text-left">Score</th>
                                <td id="fdllatv" style="font-weight:bolder"></td>

                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="card-footer text-muted">
                    <span id="fluffy"></span>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal" tabindex="-1" role="dialog" id="traore">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="alert text-center" id="scarvlet"></p>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#ijy").click(function() {
        var today = new Date();
        var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        var dateTime = date + ' ' + time;
        $("#fluffy").html(dateTime);
        $.ajax({

            type: 'post',
            url: '<?= Inaki::path() ?>rp/<?= md5(time()); ?>?truestynm',
            data: $("#answerForm").serialize(),
            success: function(rs) {


                Score();
                attemped();
                $("#icor").html();
                if (parseInt(rs.type) == 1) {
                    $("#scarvlet").html("<p class='alert alert-danger text-center'>" + rs.msg + "</p>");
                } else {
                    $("#scarvlet").html("<p class='alert alert-success text-center'>" + rs.msg + "</p>");
                }

                $("#traore").modal('show');
            }
        });
        return false;
    });


    function Score() {
        $.get('<?= Inaki::path() ?>rp?isa&<?= token() . sha1(time()); ?>', function(data) {
            $('#fdllatv').html(data);
        });
    }

    function attemped() {
        $.get('<?= Inaki::path() ?>rp?isas&<?= token() . sha1(time()); ?>', function(data) {
            $('#demanddfa').html(data);
        });
    }





    function monitor() {
        return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
    }


    function timeKeeper(id) {

        let counter = 15;
        let interval;
        interval = setInterval(function() {
            counter--;


            // Display 'counter' wherever you want to display it.
            if (counter <= 0) {

                //console.log("Time :" + counter);
                clearInterval(interval);
                $("#vdb").addClass("hd");
                $("#igla").removeClass("hd");
                $("#frontl").addClass("hd");
                $("#ijy").attr("disabled", true);
                $('#time').html('');

                $("#igla").html("<i class='fa fa-play' aria-hiddeb='true'></i> Next");

                return;
            } else {
                $("#quid").val(id);
                $("#answerForm").show();
                $("#vdb").removeClass("hd");

                $("#frontl").removeClass("hd");

                //console.log("i was called here too");
                if (counter <= 1) {
                    $("#answerForm").hide();
                    document.getElementById("answerForm").reset();
                    $('#time').html('Time left: ' + counter + " second");
                } else {

                    $('#time').html('Time left: ' + counter + " seconds");
                }

                $("#ijy").attr("disabled", false);





            }
        }, 1000);


    }




    $("#igla").click(function() {
        $("#igla").addClass("hd");
        $.ajax({
            type: "GET",
            url: '<?= Inaki::path() ?>rp/<?= token() ?>/i?HOzRz7sso_chgfdshgiiOJlzEVpYBpgFyT67w_SFek/<?= md5(time()); ?>?egret&slug',
            success: function(data) {
                const rem = JSON.parse(data);
                console.log(rem);

                if (parseInt(rem.counter) == 30) {
                    Score();
                    attemped();
                    if (rem.score > 24) {
                        $("#rightleft").html('<p class="alert alert-success text-center">You have completed your regionals. Congratulations! You have qualified for the next round.</p>');

                    } else {
                        $("#rightleft").html('<p class="alert alert-danger text-center">You have completed your regionals. Unfortunately, you have not qualified for the next round. Contact Admin if you wish to try again.</p>');

                    }


                } else {

                    const flunkr = rem.id;
                    $("#ipmana").val(flunkr);
                    const remake = rem.path;
                    const egba = parseInt(rem.duration);

                    let ddfla = '<audio id="vdb" controls autoplay="true" preload><source src="<?= Inaki::path() ?>' + remake + '" type="audio/mpeg"></audio>';
                    $("#rightleft").html(ddfla);
                    var aud = document.getElementById("vdb");
                    aud.onended = function() {
                        timeKeeper(flunkr);
                    };


                }






            }
        });



        return false;
    });
</script>