<table>
    <!-- Ligne de tableau pour la bienvenue de l'utilisateur -->
    <tr>
        <td colspan="2">
            <h1>
                <?php
                if (isset($_SESSION['pseudoUser'])) {
                    echo "Bienvenue " . $_SESSION['pseudoUser'];
                } else {
                    echo 'Il y a un problème';
                }
                ?>
            </h1>
        </td>
    </tr>

    <!-- Ligne de tableau pour l'équipe de l'utilisateur et son poste -->
    <tr>
        <th>
            Equipe
        </th>
        <th>
            Poste
        </th>
    </tr>
    <tr>
        <td>
                <?php
                if (isset($_SESSION['teamUser'])) {
                    echo $_SESSION['teamUser'];
                } else {
                    echo 'Il y a un problème';
                }
                ?>
        </td>
        <td>
                <?php
                if (isset($_SESSION['posteUser'])) {
                    echo $_SESSION['posteUser'];
                } else {
                    echo 'Il y a un problème';
                }
                ?>
        </td>
    </tr>
</table>