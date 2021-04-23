<?= $this->extend('template/base') ?>
<?php $this->section('title') ?>
User Profile
<?php $this->endSection() ?>
<?php $this->section('content'); ?>
<div class="col-md-12">
    <div class="row">
        <div class="col-sm-10"><h1><?= session ()->get ('user')['username'] ?? 'N/A'  ?></h1></div>
        <div class="col-sm-2">
            <a href="/users" class="pull-right">
                <img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100">
            </a>
        </div>
    </div>
    <div class="row">
        <?php
        $errors = [];
        if (session ()->getFlashdata ('errors') != null) :
            $errors = session ()->getFlashdata ('errors');
        endif;
        ?>
        <div class="col-sm-3"><!--left col-->
            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block file-upload">
            </div>
            <hr>
            <br>

        </div><!--/col-3-->
        <div class="col-sm-9">
            <?php if ($message = session ()->getFlashdata ('message')) : ?>
            <p class="alert alert-success"><?= $message ?></p>
            <?php endif;  ?>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
                <li><a data-toggle="tab" href="#messages">Edit Profile</a></li>
                <li><a data-toggle="tab" href="#settings">Change Password</a></li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <h2>Profile</h2>
                    <hr>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <strong>Full name:</strong>
                            <?= $name ?? 'N/A' ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <strong>Email:</strong>
                            <?= session ()->get ('user')['email'] ?? 'N/A' ?>
                        </div>
                        <div class="col-xs-6">
                            <strong>Address:</strong>
                            <?= $addree ?? 'N/A'  ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-4">
                            <strong>City:</strong>
                            <?= $city ?? 'N/A' ?>
                        </div>
                        <div class="col-xs-4">
                            <strong>State:</strong>
                            <?= $state ?? 'N/A'  ?>
                        </div>
                        <div class="col-xs-4">
                            <strong>Country:</strong>
                            <?= $country ?? 'N/A' ?>
                        </div>
                    </div>
                    <hr>

                </div><!--/tab-pane-->
                <div class="tab-pane" id="messages">
                    <?php if (allowEdit (session ()->get ('user')['id'])): ?>
                    <h2>Edit Profile</h2>
                    <hr>
                    <form class="form" action="<?= base_url ('/users/'.$id.'/profile') ?>" method="post" id="editprofileform">
                        <?= csrf_field ()  ?>
                        <div class="form-group">

                            <div class="col-xs-12">
                                <label for="first_name"><h4>Full name</h4></label>
                                <input type="text" class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>" name="name" id="first_name" value="<?= old ('name') ?? $name  ?>" placeholder="first name" title="Enter Your Email">
                                <?php if (isset($errors['name'])) : ?>
                                <p class="invalid-feedback">
                                    <?= $errors['name'] ?>
                                </p>
                                <?php endif;  ?>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control disabled <?= isset($errors['email']) ? 'is-invalid' : '' ?>" name="email" id="email" value="<?= old ('email') ?? session ()->get ('user')['email'] ?>" placeholder="you@email.com" title="enter your email" disabled>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="address"><h4>Address</h4></label>
                                <input type="text" class="form-control <?= isset($errors['address']) ? 'is-invalid' : '' ?>" name="address" value="<?= old ('address') ?? '' ?>" id="address" placeholder="enter address" title="enter your Address">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-4">
                                <label for="city"><h4>City</h4></label>
                                <input type="text" class="form-control <?= isset($errors['city']) ? 'is-invalid' : '' ?>" value="<?= old ('city') ?? $city  ?>" name="city" id="city" placeholder="enter City" title="enter your City">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-4">
                                <label for="state"><h4>State</h4></label>
                                <input type="text" class="form-control <?= isset($errors['state']) ? 'is-invalid' : '' ?>" name="state" value="<?= old ('state') ?? $state ?>" id="state" placeholder="Enter State" title="enter your state.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                <label for="country"><h4>Country</h4></label>
                                <input type="text" class="form-control <?= isset($errors['country']) ? 'is-invalid' : '' ?>" name="country" value="<?= old ('country') ?? $country  ?>" id="country" placeholder="Enter country" title="enter country">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg" >Save</button>
                            <button type="reset" class="btn btn-default btn-lg" >Reset</button>
                        </div>
                    </form>
                    <?php else: ?>
                    <h2>You Are Not LoggedIn</h2>
                    <?php endif;  ?>
                </div><!--/tab-pane-->
                <div class="tab-pane" id="settings">
                    <?php if (allowEdit (session ()->get ('user'))):  ?>
                    <h2>Change Password</h2>
                    <hr>
                    <form class="form" action="#" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-12">
                                <label for="first_name"><h4>Old Password</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-12">
                                <label for="last_name"><h4>New Password</h4></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-12">
                                <label for="phone"><h4>Verify Password</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                            </div>
                        </div>
                    </form>
                    <?php else: ?>
                    <h2>You Are Not LoggedIn</h2>
                    <?php endif;  ?>
                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div>
<script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function(){
            readURL(this);
        });
    });
</script>
<?php $this->endSection(); ?>
