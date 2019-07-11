<?php
include_once('config.php');
include_once('template/head.php');
include_once('template/header.php');
?>

<div id="loader" class="modal">
    <div class="view loading">
        <div class="wrap-loader">
            <div class="loader"></div>
        </div>
    </div>
</div>

<main class="contact">
    <section>
        <div class="container-fluid">
            <div class="row avatar-row">
                <div class="col-10 mx-auto mx-xl-0 col-xl-12">
                    <figure class="text-center">
                        <img src="<?php echo $baseurl; ?>assets/img/me-avatar.svg" class="mx-auto">
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-10 mx-auto mx-xl-0 col-xl-12">
                    <h1 class="text-center mb-5 pb-5 mt-5 border-bottom border-color">Want to talk about freelance jobs or hire?<br>I'm most definitely game!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-10 mx-auto col-xl-6">
                    <form action="" class="great-spacer">
                        <div class="row">
                            <div class="col-xl-6 pl-xl-0 col-12">
                                <label class="m-0">Name</label>
                                <input type="text" name="name" class="w-100">
                            </div>
                            <div class="col-xl-6 pr-xl-0 col-12">
                                <label class="m-0">E-mail</label>
                                <input type="email" name="email" class="w-100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 pl-xl-0 col-12">
                                <label class="m-0">Whats this about?</label>
                                <input type="text" name="subject" class="w-100">
                            </div>
                            <div class="col-xl-6 pr-xl-0 col-12">
                                <label class="m-0">WhatsApp</label>
                                <input type="text" name="phone" class="w-100">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 px-xl-0">
                                <label class="m-0">Additional details?</label>
                                <textarea type="text" name="msg" class="w-100"></textarea> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 px-xl-0 d-flex justify-content-center align-items-center">
                                <input type="submit" value="submit" class="btn btn-primary d-flex mx-auto ml-xl-0 mr-xl-5 my-3">
                                <input type="submit" data-clean value="clean" class="btn btn-primary d-flex mx-auto m-xl-0 my-3">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include_once('template/foot.php');
include_once('template/footer.php');
?>