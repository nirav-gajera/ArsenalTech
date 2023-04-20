<html>
<body>
    <form method="post">
        <label for="input">Please enter any day of week</label>
        <input type="text" name="dayofweek" id="dayofweek">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            if(isset($_POST['dayofweek'])){
                switch ($_POST['dayofweek']) {
                    case 'Monday':
                        echo "Laugh on Monday, laugh for danger.";
                        break;
                    case 'Tuesday':
                        echo "Laugh on Tuesday, kiss a stranger.";
                        break;
                    case 'Wednesday':
                        echo "Laugh on Wednesday, laugh for a letter.";
                        break;
                    case 'THursday':
                        echo "Laugh on Thursday, something better.";
                        break;
                    case 'Friday':
                        echo "Laugh on Friday, laugh for sorrow.";
                        break;
                    case 'Saturday':
                        echo "Laugh on Saturday, joy tomorrow.";
                        break;
                    default:
                        echo "Not any day of week";
                        break;
                } 
            }
        }
    ?>
</body>
</html>
