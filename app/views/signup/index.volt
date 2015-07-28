
<div class="page-header">
    <h2>Registration</h2>
</div>

{{ form('signup', 'id': 'signupForm', 'onbeforesubmit': 'return false') }}

    <fieldset>

        <div class="control-group">
            {{ form.label('username', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('username', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="username_alert">
                    <strong>Warning!</strong> Please enter your desired user name
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('email', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('email', ['class': 'form-control']) }}
                <p class="help-block">(required)</p>
                <div class="alert alert-warning" id="email_alert">
                    <strong>Warning!</strong> Please enter your email
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('password', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('password', ['class': 'form-control']) }}
                <p class="help-block">(minimum 8 characters)</p>
                <div class="alert alert-warning" id="password_alert">
                    <strong>Warning!</strong> Please provide a valid password
                </div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="repeatPassword">Repeat Password</label>
            <div class="controls">
                {{ password_field('repeatPassword', 'class': 'input-xlarge') }}
                <div class="alert" id="repeatPassword_alert">
                    <strong>Warning!</strong> The password does not match
                </div>
            </div>
        </div>

        <div class="form-actions">
            {{ submit_button('Register', 'class': 'btn btn-primary', 'onclick': 'return SignUp.validate();') }}
        </div>

    </fieldset>
</form>
