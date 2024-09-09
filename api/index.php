<?php
if (isset($_POST['reserved'])) {
    echo "Thank You";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = isset($_POST['date']) ? $_POST['date'] : null;
    $time = isset($_POST['time']) ? $_POST['time'] : [];
    $number = $_POST['number'];
    $note = $_POST['note'];

    if (empty($name)) {
        $errname = "Name is required";
    } elseif (strlen($name) < 3) {
        $errname = "Very Small name";
    } elseif (!preg_match("/^[A-Za-z. ]*$/", $name)) {
        $errname = "Only letters and white space allowed";
    } else {
        $crrname = $name;
    }
    
    if (empty($email)) {
        $erremail = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erremail = "Invalid email format";
    } else {
        $crremail = $email;
    }

    if (empty($phone)) {
        $errphone = "Please enter the phone number";
    } else {
        $crrphone = $phone;
    }

    if (empty($date)) {
        $errdate = "Please select the date";
    } else {
        $crrdate = $date;
    }

    if (empty($time)) {
        $errtime = "Please fixed time";
    } else {
        $crrtime = $time;
    }

    if (empty($number)) {
        $errnumber = "Please enter number of customer";
    } else {
        $crrnumber = $number;
    }

    if (empty($note)) {
        $errnote = "Please enter your own opinion....";
    } else {
        $crrnote = $note;
    }


    if (isset($name) && isset($email) && isset($phone) && isset($date) && isset($time) && isset($number) && isset($number)) {
        $nane = $email = $phone = $date = $time = $number = $note = null;
    }
}
?>

<link rel="stylesheet" href="style.css">
<main>
      <h1>Restaurant Reservation Form</h1>
      <form action="https://formspree.io/f/mblrbble"
        method="POST"
      >
        <div class="input">
          <p>Name</p>
          <input type="text" placeholder="First" name="name" value="<?= $name ?? null ?>">
          <span style="color: red"><?= $errname ?? null ?></span>
        </div>

        <div class="input"><br>
          <input type="text" placeholder="Last" name="name" value="<?= $name ?? null ?>">
        </div>

        <div class="input">
          <p>Email</p>
          <input type="email" name="email" value="<?= $email ?? null ?>">
          <span style="color: red"><?= $erremail ?? null ?></span>
        </div>

        <div class="input">
          <p>Phone</p>
          <input type="text" placeholder="### ### ####" name="phone" value="<?= $phone ?? null ?>">
          <span style="color: red"><?= $errphone ?? null ?></span>
        </div>

        <div class="input">
          <p>Reservation Date</p>
          <input type="date" name="date" value="<?= $date ?? null ?>">
          <span style="color: red"><?= $errdate ?? null ?></span>
        </div>

        <div class="input">
          <p>Reservation Time</p>
          <input type="time" name="time" value="<?= $time ?? null ?>">
          <span style="color: red"><?= $errtime ?? null ?></span>
        </div>

        <div class="customer-section">
          <p>How many person will you be with?</p>
          <input type="number" name="number" value="<?= $number ?? null ?>">
          <span style="color: red"><?= $errnumber ?? null ?></span>
        </div>
        <br>
        <div class="notes">
          <p>Notes</p>
          <input type="text" class="note" name="note" value="<?= $note ?? null ?>">
          <span style="color: red"><?= $errnote ?? null ?></span>
        </div>
        <br />
        <button type="submit" class="btn" name="reserved">SEND</button>
      </form>
    </main>

    <?php
if (isset($crrname) && isset($crremail) && isset($crrphone) && isset($crrdate) && isset($crrtime) && isset($crrnumber) && isset($crrnote)) {
    echo "<h2>Your Information</h2>";
    echo "Name: " . $crrname . "<br>";
    echo "Email: " . $crremail . "<br>";
    echo "Phone: " . $crrphone . "<br>";
    echo "Reservation Date: " . $crrdate . "<br>";
    echo "Reservation Time: " . $crrtime . "<br>";
    echo "Customer Number: " . $crrnumber . "<br>";
    echo "Notes: " . $crrnote . "<br>";
}
?>
