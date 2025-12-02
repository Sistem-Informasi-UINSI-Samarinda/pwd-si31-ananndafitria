<!DOCTYPE html>
<html>
<head>
    <title>Tabel Kebenaran 2 Input (p, q)</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: auto;}
        th, td { border: 1px solid #333; text-align: center; padding: 8px;}
        th { background-color: #ff00bfff; color: white; }
        h2 { text-align: center; }
        body { background-color: #eef3f7; font-family: Arial, sans-serif;}
    </style>
</head>
<body>
    <h2>Tabel Kebenaran 2 Input (p, q)</h2>
    <h3>ANANDA FITRIA - si.31</h3>
    <h4>NIM = 2441919030</h4>

    <table>
        <tr>
            <th>p</th>
            <th>q</th>
            <th>¬p</th>
            <th>¬q</th>
            <th>(p ∨ q) ∧ ¬q</th>
            <th>p ∧ (¬p ∨ ¬q)</th>
            <th>(p → ¬p) ∧ q</th>
            <th>p ∨ (p ↔ q)</th>
            <th>(¬p → ¬q) ↔ p</th>
            <th>(p ∨ ¬q) → p ↔ q</th>
        </tr>

        <?php
        $values = [1, 0];

        foreach ($values as $p) {
            foreach ($values as $q) {

                $notP = !$p;
                $notQ = !$q;

                // Kolom 5
                $t5 = ($p || $q) && $notQ;  // (p ∨ q) ∧ ¬q

                // Kolom 6
                $t6 = $p && ($notP || $notQ); // p ∧ (¬p ∨ ¬q)

                // Kolom 7
                $t7 = ($notP) && $q; // (p → ¬p) ∧ q

                // Kolom 8
                $equivPQ = ($p && $q) || ($notP && $notQ);
                $t8 = $p || $equivPQ; // p ∨ (p ↔ q)

                // Kolom 9
                $implikasi = $p || $notQ;       // (¬p → ¬q) ↔ p
                $t9 = ($implikasi == $p);

                // Kolom 10
                $left = $p || $notQ; // (p ∨ ¬q) → p ↔ q
                $right = $equivPQ;
                $t10 = (!$left) || $right;

                echo "<tr>";
                echo "<td>$p</td>";
                echo "<td>$q</td>";
                echo "<td>".(int)$notP."</td>";
                echo "<td>".(int)$notQ."</td>";
                echo "<td>".(int)$t5."</td>";
                echo "<td>".(int)$t6."</td>";
                echo "<td>".(int)$t7."</td>";
                echo "<td>".(int)$t8."</td>";
                echo "<td>".(int)$t9."</td>";
                echo "<td>".(int)$t10."</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

    <p style="text-align:center; margin-top:10px;">
        Keterangan: 1 = Benar (True), 0 = Salah (False)
    </p>
</body>
</html>
