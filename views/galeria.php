<h3>Álbuns</h3>

<ul>
	<?php foreach ($albuns as $album): ?>
	<li>
		<a href="<?php echo BASE_URL; ?>galeria/abrir/<?php echo $album['slug']?>">
			<?php echo $album['titulo']; ?>
		</a>
	</li>
	<?php endforeach; ?>
</ul>