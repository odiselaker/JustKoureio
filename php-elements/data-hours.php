<link rel="stylesheet" href="CSS/contact.css">

<?php
    $sql = "SELECT * FROM calendar";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $calendar = $stmt->fetchAll(PDO::FETCH_ASSOC);
?> 

<div class="tablee">
<table>
    <tr>
        <th>days</th>
        <th>Morninghours</th>
        <th>NightHours</th>
    </tr>

    <?php foreach($calendar as $days): ?>
    <tr>
        <td><?php echo htmlspecialchars($days['days']); ?></td>
        <td><?php echo htmlspecialchars($days['MorningHours_start'] ?? '') . " - " . htmlspecialchars($days['MorningHours_end'] ?? ''); ?></td>
        <td><?php echo htmlspecialchars($days['NightHours_start'] ?? '') . " - " . htmlspecialchars($days['NightHours_end'] ?? ''); ?></td>
    </tr>
    <?php endforeach; ?>

</table>
</div>