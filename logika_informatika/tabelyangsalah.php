perbaiki kode berikut dan beritau letak salahnya, <!DOCTYPE html>
<html>
<head>
    <title>Tabel Kebenaran 2 Input (p, q)</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: auto;}
        th, td { border: 1px solid #333; text-align: center; padding: 8px;}
        th { background-color: #007bff; color: white; }
        h2 { text-align: center; }
        body { background-color: #eef3f7; font-family: Arial, sans-serif;}
    </style>
</head>
<body>
    <h2>Tabel Kebenaran 2 Input (p, q)</h2>
    <h3> ANANDA FITRIA - si.31 </h3>
    <h4> NIM= 2441919030</h4>
    <table>
        <tr>
            <th>p</th>
            <th>q</th>
            <th>¬p</th>
            <th>¬q</th>
            <th>(pvq)∧¬q</th>
            <th>p∧(¬pv¬q)</th>
            <th>(p → ¬p)∧q</th>
            <th>p ∨ (p ↔ q)</th>
            <th>(¬p → ¬q) ↔ p</th>
            <th>(p ∨ ¬q) → p ↔ q</th>

        </tr>
        <?php
        $values = [1, 0];
        foreach ($values as $p){
            foreach ($values as $q){
                $notP = !$p; //¬p
                $notQ = !$q; //¬q
                $orPQ = $p || $q; // p v q
                $andPQ = $p && $q; // p ∧ q
                $tabel5 = ($p || $q) && $notq; // 2. (pvq)∧¬q
                $tabel6= $p && (($notp) || $q); // 3.  p ∧ (¬p ∨ q)
                $tabel7= (!$p)||($notp) && $q; // 4. (p → ¬p) ∧ q
                $tabel8=  ($p && $q) || ((!$p) && (!$q)); // 5. p ∨ (p ↔ q)
                $tabel9= (!$notp) || ($notq); // 6. (¬p → ¬q) ↔ p
                $tabel10= $p || $notq;


                echo "<tr>";
                echo "<td>$p</td>";
                echo "<td>$q</td>";
                echo "<td>".(int)$notp."</td>";
                echo "<td>".(int)$notq."</td>";
                echo "<td>".(int)$tabel5."</td>";
                echo "<td>".(int)$tabel6."</td>";
                echo "<td>".(int)$tabel7."</td>";
                echo "<td>".(int)$tabel8."</td>";
                echo "<td>".(int)$tabel9."</td>";
                echo "<td>".(int)$tabel10."</td>";
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
