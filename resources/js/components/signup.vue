<template>
  <div class="signup-container">
      <h1>Sign Up</h1>
      <form action="">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="user_id" text="Enter Username" required>
          </div>
          <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="user_fn" text="Enter First Name" required>
          </div>
          <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="user_ln" text="Enter Last Name" required>
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" id="user_age" text="Enter Age" required>
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="user_gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="LGBTQ">LGBTQ</option>
            </select>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="user_email" required>
          </div> 
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="user_pass" required>
          </div> 
          <div class="form-group">
            <label for="conf-password">Confirm Password</label>
            <input type="password" name="conf-password" id="user_confpass" required>
          </div>
          <button type="submit">Sign Up</button>
          <button>Sign Up With Google</button>
      </form>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>