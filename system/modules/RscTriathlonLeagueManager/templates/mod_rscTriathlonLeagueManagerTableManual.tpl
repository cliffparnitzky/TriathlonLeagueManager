
<!-- indexer::stop -->
<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if ($this->headline): ?>

<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>

<table cellspacing="0" cellpadding="0" border="0" class="ligatable">
	<thead>
		<tr>
			<td>Platz</td>
			<td colspan="1">Team</td>
<?php if ($this->triathlonLeagueColumns == 'wp_pz'): ?>
			<td>Wertungspunkte</td>
			<td>Platzziffer</td>
<?php elseif ($this->triathlonLeagueColumns == 'pkt'): ?>
			<td>Punkte</td>
<?php endif; ?>
		</tr>
	</thead>
	<tfoot>
		<tr><td colspan="<?php if ($this->triathlonLeagueColumns == 'wp_pz'): ?>4<?php elseif ($this->triathlonLeagueColumns == 'pkt'): ?>3<?php endif; ?>">Stand <?php echo date('d.m.Y', $this->triathlonLeagueUpdateDate); ?> nach <?php echo $this->racesDone; ?> von <?php echo $this->racesTotal; ?> Rennen</td></tr>
	</tfoot>
	<tbody>
<?php foreach ($this->table as $index => $entry): ?>
			<tr<?php if ($this->teams[$entry['triathlonLeagueTableTeam']]['ownTeam']): ?> class="ownteam"<?php endif; ?>>
				<td class="place"><?php echo $index + 1; ?>.</td>
				<td class="team"><?php echo $this->teams[$entry['triathlonLeagueTableTeam']]['name']; ?><img src="<?php echo $this->teams[$entry['triathlonLeagueTableTeam']]['logo']; ?>" title="<?php echo $this->teams[$entry['triathlonLeagueTableTeam']]['name']; ?>" /></td>
<?php if ($this->triathlonLeagueColumns == 'wp_pz'): ?>
				<td class="points"><?php echo $entry['triathlonLeagueTableScoringPoints']; ?></td>
				<td class="points"><?php echo $entry['triathlonLeagueTablePlaceNumber']; ?></td>
<?php elseif ($this->triathlonLeagueColumns == 'pkt'): ?>
				<td class="points"><?php echo $entry['triathlonLeagueTablePoints']; ?></td>
<?php endif; ?>
			</tr>
<?php endforeach; ?>
	</tbody>
</table>
 
</div>
<!-- indexer::continue -->
