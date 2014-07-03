
<!-- indexer::stop -->
<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if ($this->headline): ?>

<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>

<table cellspacing="0" cellpadding="0" border="0" class="ligatable">
	<thead>
		<tr>
			<td><?php echo $GLOBALS['TL_LANG']['TriathlonLeagueManager']['thead']['place']; ?></td>
			<td><?php echo $GLOBALS['TL_LANG']['TriathlonLeagueManager']['thead']['team']; ?></td>
<?php if ($this->columnType == 'wp_pz'): ?>
			<td class="points"><?php echo $GLOBALS['TL_LANG']['TriathlonLeagueManager']['thead']['scoringPoints']; ?></td>
			<td class="points"><?php echo $GLOBALS['TL_LANG']['TriathlonLeagueManager']['thead']['placeNumber']; ?></td>
<?php elseif ($this->columnType == 'pkt'): ?>
			<td class="points"><?php echo $GLOBALS['TL_LANG']['TriathlonLeagueManager']['thead']['points']; ?></td>
<?php endif; ?>
		</tr>
	</thead>
	<tfoot>
		<tr><td colspan="<?php if ($this->columnType == 'wp_pz'): ?>4<?php elseif ($this->columnType == 'pkt'): ?>3<?php endif; ?>"><?php echo $this->tfoot; ?></td></tr>
	</tfoot>
	<tbody>
<?php foreach ($this->tableData as $index => $entry): ?>
			<tr<?php if ($this->teams[$entry['tableTeam']]['ownTeam']): ?> class="ownteam"<?php endif; ?>>
				<td class="place"><?php echo $entry['tablePlace']; ?>.</td>
				<td class="team"><?php echo $this->teams[$entry['tableTeam']]['name']; ?><img src="<?php echo $this->teams[$entry['tableTeam']]['logo']; ?>" title="<?php echo $this->teams[$entry['tableTeam']]['name']; ?>" /></td>
<?php if ($this->columnType == 'wp_pz'): ?>
				<td class="points"><?php echo $entry['tableScoringPoints']; ?></td>
				<td class="points"><?php echo $entry['tablePlaceNumber']; ?></td>
<?php elseif ($this->columnType == 'pkt'): ?>
				<td class="points"><?php echo $entry['tablePoints']; ?></td>
<?php endif; ?>
			</tr>
<?php endforeach; ?>
	</tbody>
</table>
 
</div>
<!-- indexer::continue -->
