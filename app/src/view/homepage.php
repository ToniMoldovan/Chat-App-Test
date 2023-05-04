<!doctype html>
<html lang="en">
<?php require_once 'components/head.php'; ?>
<body>
    <h1>Chat Application</h1>
    <form action="/chat-room" method="post">
        <input type="text" name="username" placeholder="Enter your username">
        <button type="submit">Join Chat</button>
    </form>
</body>
<?php require_once 'components/footer.php'; ?>
</html>
