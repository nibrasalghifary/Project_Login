<?php 
require_once 'proses.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PBO PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
        }
        .form-wrapper {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }
        .input-group { margin-bottom: 15px; }
        .input-group input, .input-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        .input-group textarea { resize: vertical; min-height: 80px; }
        .btn-container { text-align: center; margin-top: 20px; }
        .submit-btn {
            background-color: #4A90E2;
            color: white;
            border: none;
            padding: 8px 30px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 14px;
        }
        .submit-btn:hover { background-color: #357ABD; }
        .result-container { margin-top: 30px; }
        .result-container p { margin: 5px 0; color: #333; }
        .reset-link {
            display: inline-block;
            margin-top: 10px;
            color: #666;
            text-decoration: none;
            font-size: 12px;
        }
        .reset-link:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <div class="form-wrapper">
        <form method="POST" action="">
            <div class="input-group">
                <input type="text" name="firstname" placeholder="Firstname" value="<?php echo $fName; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" name="lastname" placeholder="Lastname" value="<?php echo $lName; ?>" required>
            </div>
            <div class="input-group">
                <input type="tel" name="phone" placeholder="Phone Number" value="<?php echo $pNumber; ?>" required>
            </div>
            <div class="input-group">
                <textarea name="address" placeholder="Address" required><?php echo $addr; ?></textarea>
            </div>
            <div class="btn-container">
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </form>

        <?php echo $resultHTML; ?>
    </div>

</body>
</html>