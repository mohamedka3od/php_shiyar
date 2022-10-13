<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<div class="container-sm mt-3" >
<form action="pdf.php" method="POST">
    <!-- name -->
    <label class="form-label" for="name">Name:</label>
    <input class="form-control" type="text" name="name" id="name" required>
    <br>
    <!-- email -->
    <label class="form-label" for="email">Email:</label>
    <input class="form-control" type="email" name="email" id="email" required placeholder="example@xx.x">
    <br>
    <!-- phone -->
    <label class="form-label" for="phone">Phone:</label>
    <input class="form-control" type="tel" name="phone" id="phone" required pattern="01[0-2][0-9]{8}" placeholder="01xxxxxxxxx">
    <br>
    <!-- objective -->
    <label class="form-label" for="obj">objective:</label>
    <br>
    <textarea class="form-control" rows="3" name="obj" cols="30"  placeholder="write about your self" ></textarea>
    <br>
    <!-- image -->
    <label class="form-label" for="personal_img" >Personal image:</label>
    <br>
    <input class="form-control" type="file" name="img" id="personal_img" required>
    <br>
    <div style="display: flex;justify-content: space-evenly;">
    <!-- date -->
    <div>
        <label class="form-label" for="date">Date Of Birth:</label>
        <br>
        <input  class="custom-select" type="date" name="date" id="date" required>
    </div>
    <!-- status -->
    <div>
        <label class="form-label" for="status">Marital Status:</label>
        <br>
            <select class="custom-select" name="status" id="status">
                <option value="Single">Single</option>
                <option value="Engaged">Engaged</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
            </select>
    </div>
    </div>
    <br>
    <!-- submit button -->
    <button class="btn btn-primary mb-3" type="submit" name="submit">make pdf</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>