<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <!-- bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous">
    </script>
    <script src="script.js" defer></script>
    <title>PHP</title>
</head>

<body>
    <div class="row">
        <div class="col">
            <div class="container mt-5">
                <h5>PHP Programs by Anurag Bhagsain & Himanshu Sharma</h5>
            </div>
        </div>`
    </div>
    <div class="container">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="question-1-tab" data-toggle="tab" href="#question-1" role="tab"
                    aria-controls="question-1" aria-selected="true">Question 1</a>
                <a class="nav-item nav-link" id="question-2-tab" data-toggle="tab" href="#question-2" role="tab"
                    aria-controls="question-2" aria-selected="true">Question 2</a>
                <a class="nav-item nav-link" id="question-3-tab" data-toggle="tab" href="#question-3" role="tab"
                    aria-controls="question-3" aria-selected="true">Question 3</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active mt-2" id="question-1" role="tabpanel" aria-labelledby="question-1-tab">
                <h5>Write a Program to reverse the user entered string.</h5>
                <form class="w-50 mt-2">

                    <div class="form-group">
                        <input type="text" id="input-question-1" name="string" class="form-control">
                        <p class="question-1-output"></p>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade show mt-2" id="question-2" role="tabpanel" aria-labelledby="question-2-tab">
                <h5>Write a program to sort the array using built in PHP method</h5>
                <?php
                    include "question-2.php"
                ?>
            </div>
            <div class="tab-pane fade show mt-2" id="question-3" role="tabpanel" aria-labelledby="question-3-tab">
                <h5>Write a menu driven program that</h5>
                <div class="row">
                    <div class="col-4">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a
                                class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">Remove Whitespaces</a><a
                                class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">String contains
                                another string</a><a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">String is all
                                lowercase (regex_</a><a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Replace
                                the with that</a></div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <form method="post">
                                    <div class="form-group"><input type="text" name="tf-whitespaces" id="input-question-3"
                                            placeholder="Enter a string with whitespaces" class="form-control"></div>
                                    <div class="form-group">
                                        <p class="question-3-output"></p>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="form-group">
                                    <input type="text" name="tf-whitespaces" id="input-first" placeholder="Primary String"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tf-whitespaces" id="input-second" placeholder="Sub String"
                                        class="form-control">
                                </div>
                                <div id="q3-output"></div>
                                <div class="form-group"><button id="substrBtn" class="btn btn-primary">Check</button></div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="form-group">
                                    <input type="text" id="replace1" disabled class="form-control" value="this input contains this and only this" placeholder="Enter something that contains the word 'the'">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="that" id="replace2"  disabled class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" id="q3-replace">Replace</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>