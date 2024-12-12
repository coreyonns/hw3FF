<div class = "row">
<div class = "col">
  <h1>Teams</h1>
  </div>
  <div class ="col-auto">
<?php
include "view-teams-newform.php";
?>
</div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
       <th>ID</th>
       <th>Team Name</th>
       <th>Division</th>
        <th></th>
         <th></th>

      </tr>
    </thead>
    <tbody>   
  <?php
    while ($team = $teams->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $team['team_id']; ?></td>
         <td><?php echo $team['team_name']; ?></td>
        <td><?php echo $team['team_division']; ?></td>
        <td>
          <?php
            include "view-teams-editform.php";
          ?>
        </td>
        <td>
          <form method="post" action="">
            <input type="hidden" name="tid" value="<?php echo $team['team_id']; ?>">
            <input type="hidden" name="actionType" value="Delete">
            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
            </svg>
            </button>
          </form>
        </td>
        <td>
          <form method="post" action="players-by-team.php">
            <input type="hidden" name="pid" value="<?php echo $team['team_id']; ?>">
            <button type="submit" class="btn btn-primary">Players</button>
          </form>
        </td>
      </tr>
      <?php
    }
   ?>
      </tbody>
  </table>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
  // Search functionality
  const searchInput = document.createElement("input");
  searchInput.type = "text";
  searchInput.placeholder = "Search teams...";
  searchInput.className = "form-control mb-3";
  document.querySelector(".table-responsive").insertBefore(searchInput, document.querySelector(".table"));

  // Event listener for search input to filter teams
  searchInput.addEventListener("input", filterTeams);

  // Sort functionality for table columns
  const headers = document.querySelectorAll(".table th");
  let sortDirection = { id: true, name: true, division: true }; // Track sort direction

  headers.forEach((header, index) => {
    header.style.cursor = "pointer";
    header.addEventListener("click", () => sortTable(index));
  });

  // Delete button functionality with confirmation prompt
  const deleteButtons = document.querySelectorAll("button[data-action='delete']");
  deleteButtons.forEach(button => {
    button.addEventListener("click", (event) => {
      event.preventDefault(); // Prevent form submission
      const teamName = button.closest("tr").querySelector("td:nth-child(2)").textContent;
      const confirmed = confirm(`Are you sure you want to delete the team "${teamName}"?`);
      if (confirmed) {
        button.closest("form").submit(); // Submit the delete form if confirmed
      }
    });
  });

  // Function to filter teams based on the search input
  function filterTeams() {
    const searchValue = searchInput.value.toLowerCase();
    const rows = document.querySelectorAll(".table tbody tr");
    rows.forEach(row => {
      const teamName = row.cells[1]?.textContent.toLowerCase();
      const division = row.cells[2]?.textContent.toLowerCase();
      if (teamName.includes(searchValue) || division.includes(searchValue)) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    });
  }

  // Function to sort the table by a column (ID, Team Name, or Division)
  function sortTable(columnIndex) {
    const rows = Array.from(document.querySelectorAll(".table tbody tr"));
    const key = columnIndex === 0 ? "id" : columnIndex === 1 ? "name" : "division";

    // Toggle sorting direction for each column
    const direction = sortDirection[key] ? 1 : -1;
    sortDirection[key] = !sortDirection[key];

    // Sort the rows based on the selected column
    rows.sort((a, b) => {
      const cellA = a.cells[columnIndex].textContent.trim().toLowerCase();
      const cellB = b.cells[columnIndex].textContent.trim().toLowerCase();
      return cellA.localeCompare(cellB) * direction;
    });

    // Reattach sorted rows to the table body
    const tbody = document.querySelector(".table tbody");
    tbody.innerHTML = "";
    rows.forEach(row => tbody.appendChild(row));
  }
});
</script>

