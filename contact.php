<link rel="stylesheet" href="/my-project/CSS/contact.css">

<?php $page_title = 'Contact'; ?>

<?php require_once "db/config.php"; ?>

<?php include_once 'includes/header+.php'; ?>

<?php
    $sql = "SELECT * FROM calendar";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $calendar = $stmt->fetchAll(PDO::FETCH_ASSOC);
?> 

<div class="tablee">
<table border="1">
    <tr>
        <th>days</th>
        <th>Morninghours</th>
        <th>NightHours</th>
    </tr>

    <?php foreach($calendar as $days): ?>
    <tr>
        <td><?php echo htmlspecialchars($days['days']); ?></td>
        <td><?php echo htmlspecialchars($days['MorningHours_start']) . " - " . htmlspecialchars($days['MorningHours_end']); ?></td>
        <td><?php echo htmlspecialchars($days['NightHours_start']) . " - " . htmlspecialchars($days['NightHours_end']); ?></td>
    </tr>
    <?php endforeach; ?>

</table>
</div>

<?php include_once 'includes/footer.php'; ?>