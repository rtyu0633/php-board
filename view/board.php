<?php require "../function/boardList.php" ?>

<?php require "header.php" ?>

<div class="board-div">
    <div class="btn-div">
        <?php
        if (!isset($_SESSION["id"])) {

        } else {
            ?>
            <a class="writeBtn btn" href="boardInfo.php">글쓰기</a>
            <?php
        }
        ?>
    </div>
    <table class="table-striped main-table text-center">
        <tr>
            <td>번호</td>
            <td>닉네임</td>
            <td>제목</td>
            <td>날짜</td>
        </tr>
        <?php
        $temp = boardList();

        foreach ($temp as $key => $value) {
            ?>
            <tr>
                <td><?= $value->idx ?></td>
                <td><?= $value->id ?></td>
                <td><?= $value->title ?></td>
                <td><?= $value->date ?></td>
            </tr>
            <?php

        }

        ?>
    </table>
</div>

<?php require "footer.php" ?>
