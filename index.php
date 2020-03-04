<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-group col-md">
    <div class="form-group col-md">
        <form action="validate.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="">UPLOAD PHOTOS:
                    <div class="form-group col-sm">
                        <input type="file" name="myfile[]" multiple>
                    </div>
                    <div class="form-group col-sm">
                        <a href="validate.php"></a><button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
                </label>
        </form>   
    </div>
    </div>
</body>
</html>