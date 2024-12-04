<html>

<head>
<style>
    body {
        background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDY1bPjndCB2lBOzONoSuCxg6pYe4AM9fTcw&s');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        font-family: Arial, sans-serif;
        color: #fff;
    }
</style>


        
    </head>


    
<body>
    <script>
document.body.style.backgroundColor = "lightblue";

</script>
<?php

require_once("util-db.php");
require_once("model-players.php");


$pageTitle = "Players";
include "view-header.php";


if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
      case "Add":
        if (insertPlayer($_POST['cName'], $_POST ['cPosition'])) {

echo '<div class = "alert alert-success" role = "alert"> Player added.</div>"';
        } else {
                echo '<div class = "alert alert-danger" role = "alert"> Error.</div>';
        }
            
      break;

 case "Edit":
        if (updatePlayer($_POST['cName'], $_POST ['cPosition'], $_POST['cid'])) {

echo '<div class = "alert alert-success" role = "alert"> Player edited.</div>"';
        } else {
                echo '<div class = "alert alert-danger" role = "alert"> Error.</div>';
        }
            
      break;
        
         case "Delete":
        if (deletePlayer($_POST['cid'])){

            echo '<div class = "alert alert-success" role = "alert"> Player deleted.</div>';
        } else {
                echo '<div class = "alert alert-danger" role = "alert"> Error.</div>';
        }
            
      break;

    }
  }

$players = selectPlayers();

include "view-players.php";

echo '<div class="container mt-4">
            <input type="text" id="playerSearch" class="form-control" placeholder="Search for players..." onkeyup="searchPlayers()">
          </div>';

echo '<div class="container mt-3">
            <table class="table table-striped table-dark" id="playerTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>';

    foreach ($players as $player) {
        echo '<tr>
                <td>' . $player['players_id'] . '</td>
                <td>' . $player['player_name'] . '</td>
                <td>' . $player['player_position'] . '</td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#playerDetailModal-' . $player['players_id'] . '">
                        View Player Details
                    </button>
                </td>
              </tr>';
    }

    echo '  </tbody>
            </table>
          </div>';
   foreach ($players as $player) {
        echo '<div class="modal fade" id="playerDetailModal-' . $player['players_id'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Player Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Player Name: ' . $player['player_name'] . '</p>
                            <p>Position: ' . $player['player_position'] . '</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
              </div>';
    }








include "view-footer.php";
  ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Search Functionality Script -->
    <script>
        function searchPlayers() {
            let input = document.getElementById('playerSearch').value.toLowerCase();
            let rows = document.getElementById('playerTable').getElementsByTagName('tr');

            for (let i = 1; i < rows.length; i++) {
                let nameCell = rows[i].getElementsByTagName('td')[1];
                if (nameCell) {
                    let name = nameCell.textContent.toLowerCase();
                    if (name.includes(input)) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }
        }
    </script>

</body>
</html>
