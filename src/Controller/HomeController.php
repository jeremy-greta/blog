<?php

try {
    $sql = 'SELECT * FROM owner';
    $qry = $cnn->prepare($sql);
    $qry->execute();
    $owner = $qry->fetch();
    // var_dump($owner);
} catch (PDOException $err) {
    echo '<p class="alert alert-danger">' . $err->getMessage() . '</p>';
}

echo $twig->render('home.twig', [
    'owner' => $owner,
]);
