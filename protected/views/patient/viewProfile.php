
<h1>Patient Profile</h1>
<br><br>
<table>
  <thead>
    <tr>
      <th width="200"></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <tr><td>Patient Id</td>
      <td><?php echo $patientData->pid; ?></td></tr>
      <tr><td>Name</td>
      <td><?php echo $patientData->name; ?></td></tr>
      <tr><td>Date Of Birth</td>
      <td><?php echo $patientData->dob; ?></td></tr>
      <tr><td>Cnic</td>
      <td><?php echo $patientData->cnic; ?></td></tr>
      <tr><td>Sex</td>
      <td><?php echo $patientData->sex; ?></td></tr>
      <tr><td>Marital</td>
      <td><?php echo $patientData->marital; ?></td></tr>
      <tr><td>Phone Number</td>
      <td><?php echo $patientData->phno; ?></td></tr>
    </tr>
  </tbody>
</table>
<br><br><br><br>