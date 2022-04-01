<?php
class behive
{

    public static function listFiles()
    {
        global $link;
        $sql = "select * from files";
        $result = $link->query($sql);
        $counter = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo ' <tr>
    <td>' . $counter++  . '</td>
    <td>' . ucfirst($row['name']) . ' </td>
    <td class="text-center"><a id="' . $row['id'] . '" class="btn btn-primary korf" href="' . Inaki::path() . 'app/buy?idpx=' . $row['id'] . '&ratelex=' . urlencode($row['path']) . '"><span class="icon"><i class="fa fa-download"></i></span> Download </a></td>
  </tr>';
            echo ' <br/>';
        }
    }

    public static function fileKeeper($userid)
    {
        global $link;
        $result = $link->query("select * from material where userid= '$userid'");
        if (mysqli_num_rows($result) > 0) {
            self::listFiles();
        } else {
            echo '
          
   
<form>
   <script src="https://js.paystack.co/v1/inline.js"></script>
   
  <p class="text-center"> <button class="btn btn-primary rounded px-5" type="button" onclick="payWithPaystack()"><i class="fa fa-long-arrow-right"></i> Buy study material </button> 
  </p>
   </form>

';
        }
    }
}




?>
<div class="row" data-keyframe='<?= token() . sha1(time()); ?>'>
    <div class="col-md-6 offset-md-3 col-sm-12 col-lg-6 offset-lg-3" style="margin-top: 4em; margin-bottom: 4em">


        <div class="">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Study material</h6>

                </div>
                <!-- Card Body -->
                <div class="card-body" style="padding-bottom: 2em">
                    <p class="text-center">
                        <svg enable-background="new 0 0 512.004 512.004" width="64px" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">

                            <g fill="#4E73DF">
                                <path class="active-path" d="m291.06 242.81c1.51 2.953 4.514 4.659 7.62 4.659 1.297 0 2.628-0.299 3.866-0.93 0.503-0.256 50.731-25.771 75.503-33.596 4.489-1.425 6.98-6.221 5.555-10.709-1.417-4.489-6.178-6.989-10.709-5.572-26.095 8.252-75.981 33.596-78.097 34.671-4.199 2.133-5.871 7.271-3.738 11.477z" data-old_color="#000000" data-original="#000000" />
                                <path class="active-path" d="m298.68 145.07c1.297 0 2.628-0.299 3.866-0.93 0.503-0.256 50.731-25.771 75.503-33.596 4.489-1.425 6.98-6.221 5.555-10.709-1.417-4.489-6.178-6.989-10.709-5.572-26.095 8.252-75.981 33.596-78.097 34.671-4.198 2.133-5.871 7.27-3.738 11.477 1.51 2.952 4.514 4.659 7.62 4.659z" data-old_color="#000000" data-original="#000000" />
                                <path class="active-path" d="m503.47 128c-4.719 0-8.533 3.823-8.533 8.533v332.8c0 14.114-11.486 25.6-25.6 25.6h-204.8v-19.635c12.442-4.352 44.851-14.498 76.8-14.498 74.334 0 124.81 16.461 125.31 16.631 2.568 0.853 5.436 0.427 7.68-1.178 2.227-1.604 3.541-4.181 3.541-6.921v-375.46c0-4.002-2.773-7.467-6.682-8.329 0 0-6.69-1.493-18.125-3.593-4.617-0.853-9.079 2.219-9.933 6.844-0.853 4.642 2.21 9.088 6.844 9.941 4.361 0.802 8.013 1.51 10.829 2.074v357.19c-19.337-5.069-62.276-14.259-119.47-14.259-37.18 0-73.702 12.211-85.001 16.35-10.044-4.437-40.405-16.35-77.133-16.35-58.778 0-107.2 9.694-128 14.618v-357.88c17.041-4.19 67.371-15.138 128-15.138 31.113 0 57.796 9.685 68.267 14.063v335.8c0 3.072 1.655 5.914 4.326 7.424 2.671 1.519 5.965 1.476 8.602-0.111 0.845-0.503 85.393-51.004 160.44-76.015 3.49-1.169 5.837-4.42 5.837-8.098v-349.87c0-2.799-1.374-5.419-3.678-7.014-2.287-1.596-5.222-1.963-7.859-0.981-68.275 25.608-137.36 68.599-138.05 69.026-3.994 2.5-5.214 7.765-2.714 11.759 2.492 3.994 7.757 5.214 11.759 2.714 0.631-0.401 60.732-37.794 123.48-63.027v331.28c-58.249 20.241-119.07 53.291-145.07 68.087v-326.51c0-3.234-1.826-6.187-4.719-7.637-1.468-0.725-36.437-17.963-80.614-17.963-77.107 0-136.39 16.683-138.88 17.399-3.661 1.041-6.187 4.395-6.187 8.201v375.47c0 2.671 1.263 5.197 3.388 6.81 1.502 1.135 3.311 1.724 5.146 1.724 0.785 0 1.57-0.111 2.338-0.333 0.589-0.162 59.597-16.734 134.2-16.734 31.198 0 57.856 9.711 68.267 14.071v20.062h-204.8c-14.114 0-25.6-11.486-25.6-25.6v-332.8c0-4.71-3.823-8.533-8.533-8.533s-8.533 3.823-8.533 8.533v332.8c0 23.526 19.14 42.667 42.667 42.667h426.67c23.526 0 42.667-19.14 42.667-42.667v-332.8c-1e-3 -4.711-3.815-8.534-8.534-8.534z" data-old_color="#000000" data-original="#000000" />
                                <path class="active-path" d="m291.06 191.61c1.51 2.953 4.514 4.659 7.62 4.659 1.297 0 2.628-0.299 3.866-0.93 0.503-0.256 50.731-25.771 75.503-33.596 4.489-1.425 6.98-6.221 5.555-10.709-1.417-4.489-6.178-6.989-10.709-5.572-26.095 8.252-75.981 33.596-78.097 34.671-4.199 2.133-5.871 7.271-3.738 11.477z" data-old_color="#000000" data-original="#000000" />
                                <path class="active-path" d="m291.06 294.01c1.51 2.953 4.514 4.659 7.62 4.659 1.297 0 2.628-0.299 3.866-0.93 0.503-0.256 50.731-25.771 75.503-33.596 4.489-1.425 6.98-6.221 5.555-10.709-1.417-4.489-6.178-6.989-10.709-5.572-26.095 8.252-75.981 33.596-78.097 34.671-4.199 2.133-5.871 7.271-3.738 11.477z" data-old_color="#000000" data-original="#000000" />
                                <path class="active-path" d="m206.75 158.37c-52.693-12.365-112.57 3.388-115.09 4.062-4.548 1.22-7.253 5.896-6.033 10.453 1.024 3.814 4.471 6.323 8.235 6.323 0.734 0 1.476-0.094 2.219-0.29 0.572-0.162 58.223-15.326 106.78-3.934 4.565 1.067 9.182-1.775 10.257-6.366 1.074-4.582-1.776-9.173-6.367-10.248z" data-old_color="#000000" data-original="#000000" />
                                <path class="active-path" d="m206.75 209.57c-52.693-12.356-112.57 3.388-115.09 4.062-4.548 1.22-7.253 5.897-6.033 10.453 1.024 3.814 4.471 6.323 8.235 6.323 0.734 0 1.476-0.094 2.219-0.29 0.572-0.162 58.223-15.326 106.78-3.934 4.565 1.067 9.182-1.775 10.257-6.366 1.074-4.582-1.776-9.173-6.367-10.248z" data-old_color="#000000" data-original="#000000" />
                                <path class="active-path" d="m291.06 345.21c1.51 2.953 4.514 4.659 7.62 4.659 1.297 0 2.628-0.299 3.866-0.93 0.503-0.256 50.731-25.771 75.503-33.596 4.489-1.425 6.98-6.221 5.555-10.709-1.417-4.488-6.178-6.989-10.709-5.572-26.095 8.252-75.981 33.596-78.097 34.671-4.199 2.133-5.871 7.271-3.738 11.477z" data-old_color="#000000" data-original="#000000" />
                                <path class="active-path" d="m206.75 260.77c-52.693-12.356-112.57 3.379-115.09 4.062-4.548 1.22-7.253 5.897-6.033 10.453 1.024 3.814 4.471 6.332 8.235 6.332 0.734 0 1.476-0.102 2.219-0.299 0.572-0.162 58.223-15.326 106.78-3.934 4.565 1.067 9.182-1.775 10.257-6.366 1.074-4.582-1.776-9.173-6.367-10.248z" data-old_color="#000000" data-original="#000000" />
                                <path class="active-path" d="m206.75 363.17c-52.693-12.365-112.57 3.388-115.09 4.062-4.548 1.22-7.253 5.897-6.033 10.453 1.024 3.814 4.471 6.332 8.235 6.332 0.734 0 1.476-0.102 2.219-0.299 0.572-0.162 58.223-15.326 106.78-3.934 4.565 1.058 9.182-1.775 10.257-6.366 1.074-4.582-1.776-9.173-6.367-10.248z" data-old_color="#000000" data-original="#000000" />
                                <path class="active-path" d="m206.75 311.97c-52.693-12.365-112.57 3.379-115.09 4.062-4.548 1.22-7.253 5.897-6.033 10.453 1.024 3.814 4.471 6.332 8.235 6.332 0.734 0 1.476-0.102 2.219-0.299 0.572-0.162 58.223-15.326 106.78-3.934 4.565 1.067 9.182-1.775 10.257-6.366 1.074-4.582-1.776-9.173-6.367-10.248z" data-old_color="#000000" data-original="#000000" />
                            </g>

                        </svg>
                    </p>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <?php behive::fileKeeper($_SESSION['raws']['id']);  ?>

                    </table>






                </div>
            </div>
        </div>

    </div>


</div>

<script src="<?= Inaki::path(); ?>js/propper.js"></script>
<script src="<?= Inaki::path(); ?>js/bootstrap.min.js"></script>
<script>
    function caveRun(resp, st) {
        $.ajax({
            type: 'GET',
            url: '<?= Inaki::path() ?>api?rex=' + resp + '&data=' + st,
            success: function(resp) {

                if (resp === 'success') {
                    window.location.reload(true);
                } else {
                    return false;
                }
            }

        });
        return false;

    }



    const API_publicKey = "FLWPUBK-a0eb7e09b5721e0b10d258718af8c418-X";

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "<?= $_SESSION['raws']['email'] ?>",
            amount: 2000,
            customer_phone: "<?= $_SESSION['raws']['phone'] ?>",
            currency: "NGN",
            txref: "<?= $_SESSION['raws']['email'] . '_study_material' . token(12); ?>",
            meta: [{
                metaname: "MB_reg<?= token(); ?>",
                metavalue: "<?= token(); ?>"
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.tx.txRef; // collect txRef returned and pass to a 	server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.tx.chargeResponseCode == "00" ||
                    response.tx.chargeResponseCode == "0"
                ) {

                    caveRun(txref, response);


                } else {
                    // redirect to a failure page.
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }



    // pk_test_4e34560a9e40ce0c5f5759a1220bda654e57a496
    //pk_live_21266c01f84372304633682e423bc2d6d7536767
    function payWithPaystack() {
        var handler = PaystackPop.setup({
            key: 'pk_test_4e34560a9e40ce0c5f5759a1220bda654e57a496',
            email: '<?= $_SESSION['raws']['email'] ?>',
            amount: 200000,
            currency: "NGN",
            ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [{
                    display_name: "<?= $_SESSION['raws']['email'] ?>",
                    variable_name: "<?= token() ?>",
                    value: "MB_reg<?= token(); ?>"
                }]
            },
            callback: function(response) {
                //alert('success. transaction ref is ' + response.reference);
                caveRun(response);
                //console.log(response);
            },
            onClose: function() {
                alert('window closed');
            }
        });
        handler.openIframe();
    }
</script>