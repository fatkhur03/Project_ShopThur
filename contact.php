<?php
	include_once 'templates/topbar.php';
	include_once 'templates/header.php';
?>

  <main>
  <!-- section -->
  <div class="container">
  <section class="my-lg-14 my-8">
      <!-- container -->
    <div class="container">
      <div class="row">
          <!-- col -->
        <div class="offset-lg-2 col-lg-8 col-12">
          <div class="mb-8">
              <!-- heading -->
            <h1 class="h3">Free Questions</h1>
            <p class="lead mb-0">For all other customer or shopper
              support requests, please visit the links below this form.</p>
          </div>
          <!-- form -->
          <form class="row">
              <!-- input -->
            <div class="col-md-6 mb-3">
              <label class="form-label" for="fname"> First Name<span class="text-danger">*</span></label>
              <input type="text" id="fname" class="form-control" name="fname" placeholder="Enter Your First Name" required>
            </div>
            <div class="col-md-6 mb-3">
              <!-- input -->
              <label class="form-label" for="lname"> Last Name<span class="text-danger">*</span></label>
              <input type="text" id="lname" class="form-control" name="lname" placeholder="Enter Your Last name" required>
            </div>
            <div class="col-md-12 mb-3">
              <!-- input -->
              <label class="form-label" for="company"> Company<span class="text-danger">*</span></label>
              <input type="text" id="company" name="company" class="form-control" placeholder="Your Company" required>
            </div>
            <div class="col-md-12 mb-3">
              <!-- input -->
              <label class="form-label" for="title"> Title</label>
              <input type="text" id="title" name="title" class="form-control" placeholder="Your Title" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label" for="emailContact">Email<span class="text-danger">*</span></label>
              <input type="email" id="emailContact" name="emailContact" class="form-control" placeholder="Enter Your First Name" required >
            </div>
            <div class="col-md-6 mb-3">
              <!-- input -->
              <label class="form-label" for="phone"> Phone</label>
              <input type="text" id="phone" name="phone" class="form-control" placeholder="Your Phone Number" required>
            </div>
            <div class="col-md-12 mb-3">
              <!-- input -->
              <label class="form-label" for="comments"> Comments</label>
              <textarea rows="3" id="comments" class="form-control" placeholder="Additional Comments"></textarea>
            </div>
            <div class="col-md-12">
              <!-- btn -->
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>


          </form>

        </div>
      </div>
    </div>

  </section>
  </div>
</main>


<?php
	include_once 'templates/footer.php';
	include_once 'templates/bottom.php';
?>
