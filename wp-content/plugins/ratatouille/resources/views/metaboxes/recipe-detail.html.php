<table class="form-table">
  <tr>
    <th><?php _e("Temps de préparation"); ?></th>
    <td>
      <select name="rat_time_preparation" id="rat_time_preparation">
        <!-- On fait en sorte que l'option soit sélectionnée en fonction de la valeur récupérée dans la db. -->
        <option value="">--</option>
        <option <?php echo $time == '10-15' ? 'selected' : '' ?> value="10-15">de 10 à 15min</option>
        <option <?php echo $time == '15-30' ? 'selected' : '' ?> value="15-30">de 15 à 30min</option>
        <option <?php echo $time == '30-45' ? 'selected' : '' ?> value="30-45">de 30 à 45min</option>
      </select>
    </td>
  </tr>
</table>  