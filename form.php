<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Application Form</title>
    <link rel="stylesheet" href="form.css" />
  </head>
  <body>
    <div class="container">
      <div class="apply_box">
        <h1>
          Job Application Form
          <span class="title_small">(Ǥᗴ丅ᕼᎥᖇᗴᗪ)</span>
        </h1>
        <form action="upload.php" method="POST"  enctype="multipart/form-data">
          <div class="form_container">
            <div class="form_control">
              <label for="first_name"> First Name </label>
              <input
                id="first_name"
                name="first_name"
                placeholder="Enter First Name..."
              />
            </div>
            <div class="form_control">
              <label for="last_name"> Last Name </label>
              <input
                id="last_name"
                name="last_name"
                placeholder="Enter Last Name..."
              />
            </div>
            <div class="form_control">
              <label for="email"> Email </label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter Email..."
              />
            </div>

            <div class="form_control">
                <label for="phone_no."> Phone Number</label>
                <input
                  type="phone_no."
                  id="phone_no."
                  name="phone_no"
                  placeholder="Enter Phone No."
                />
              </div>

            <div class="form_control">
              <label for="job_role"> Job Role </label>
              <select id="job_role" name="job_role">
                <option value="">--Select Job Role--</option>
                <option value="software_engineer">Software Engineer</option>
                <option value="andriod_developer">Andriod Developer</option>
                <option value="full_stack_developer">Full Stack Developer</option>
                <option value="machine_learning_engineer">Machine Learning Engineer</option>
                <option value="data_scientist">Data Scientist</option>
                <option value="node_js_developer">Node JS Developer</option>
                <option value="cloud_engineer">Cloud Engineer</option>
              </select>
            </div>

            <div class="form_control">
              <label for="gender"> Gender </label>
              <select id="gender" name="gender">
                <option value="">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>

            <div class="textarea_control">
              <label for="address"> Address </label>
              <textarea
                id="address"
                name="address"
                row="4"
                cols="50"
                placeholder="Enter Address"
              ></textarea>
            </div>

            <div class="form_control">
              <label for="city"> City </label>
              <input id="city" name="city" placeholder="Enter City Name..." />
            </div>

            <div class="form_control">
              <label for="pincode"> Pincode </label>
              <input
                type="number"
                id="pincode"
                name="pincode"
                placeholder="Enter Pincode..."/>
            </div>

            <div class="form_control">
              <label for="date"> Date </label>
              <input value="2022-01-10" type="date" id="date" name="date" />
            </div>

            <div class="form_control">
              <label for="upload"> Upload Your Resume </label>
              <input type="file" id="upload" name="resume" />
            </div>

          </div>
          <div class="button_container">
            <button type="submit" name="submit">Apply Now</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>