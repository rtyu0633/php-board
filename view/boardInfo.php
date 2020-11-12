<?php require "header.php" ?>

<form action="../function/boardInsert.php" method="post" id="frm" name="frm">
    <div class="input-group mt-3 mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">작성자</span>
        </div>
        <input id="name" name="name" value="<?=$_SESSION['id']?>" readonly="readonly" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">제목</span>
        </div>
        <input id="title" name="title" type="text" class="form-control" placeholder="제목을 입력해주세요" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <textarea placeholder="내용을 작성해주세요" name="content" id="content"  hidden ></textarea>

    <button type="submit" class="btn writeBtn mt-3 mb-3" >글쓰기</button>
</form>

<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<script src="../library/ckeditor.js"></script>
<?php require "footer.php" ?>

