<?php

/**
 * @file
 *
 * Override blast_ui entry page for LegumeInfo.
 */

?>

<h1> BLAST Search </h1>
<p>
  Search for one or more of your sequences (using BLAST) against multiple 
  legume genomes. First pick a query type (nucleotide or protein). 
  You will be able to set search parameters on the next page.
</p>
<p>
Choose the appropriate program based on the Query type and Target
database type. Please click on the program name to view the search form.
<p>

<table>
  <tr>
    <th>Query Type</th>
    <th>Database Type</th>
    <th>BLAST Program</th>
  </tr>
  <tr>
    <td rowspan = "2">Nucleotide</td> 
    <td>Nucleotide</td> 
    <td><?php print l('blastn', './blast/nucleotide/nucleotide');?>:
      Search a nucleotide database using a nucleotide query.</td>
  </tr>
  <tr>
    <td>Protein</td>
    <td><?php print l('blastx', './blast/nucleotide/protein');?>:
      Search protein database using a translated nucleotide query.</td>
  </tr>
  <tr>
    <td rowspan="2">Protein</td>
    <td>Nucleotide</td> 
    <td><?php print l('tblastn', './blast/protein/nucleotide');?>:
      Search translated nucleotide database using a protein query.</td>
  </tr>
  <tr>
    <td>Protein</td>
    <td><?php print l('blastp', './blast/protein/protein');?>:
      Search protein database using a protein query.</td>
  </tr> 
</table>

<!-- Recent Jobs -->
<?php

  // Gets the list of recent jobs filtered to the current blast program (ie: blastn).
  $recent_jobs = get_recent_blast_jobs();
  if ($recent_jobs) {
  
    print '<h2>Recent Jobs</h2>';
    
    $table = array(
      'header' => array('Query Information', 'Search Target', 'Date Requested', ''),
      'rows' => array(),
      'attributes' => array('class' => array('tripal-blast', 'recent-jobs')),
      'sticky' => FALSE
    );
  
    foreach ($recent_jobs as $job) {

      // Define a row for the current job.
      $table['rows'][] = array(
        $job['query_info'],
        $job['target'],
        $job['date'],
        l('See Results', $job['job_output_url'])
      );
    }
    
    print theme('table', $table);
  }
?>