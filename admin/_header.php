	<?
	$result = mysql_query("SELECT url, menu, id, p_id FROM ".MySQLprefix."_mypages WHERE place='top' AND shows=1 AND id!=77 ORDER BY p_id ASC, sort_id ASC");
	if($result)
		while($row = mysql_fetch_assoc($result)){
			$treeid[] = $row["id"];
			$treename[] = $row["menu"];
			$treeurl[] = $row["url"];
			$treepid[] = $row["p_id"];
			$treelevel[] = 0;
		}
	$count = count($treeid);
	for($i=0; $i<$count-1; $i++){
		$g = $i;
		for($j=1; $j<$count; $j++)
			if($treepid[$j] == $treeid[$i]){
				$jid = $treeid[$j];
				$jpid = $treepid[$j];
				$jname = $treename[$j];
				$jurl = $treeurl[$j];
				$jlevel = $treelevel[$i]+1;
				$k = $j;
				while ($k>$g+1){
					$treeid[$k] = $treeid[$k-1];
					$treepid[$k] = $treepid[$k-1];
					$treename[$k] = $treename[$k-1];
					$treeurl[$k] = $treeurl[$k-1];
					$treelevel[$k] = $treelevel[$k-1];
					$k = $k - 1;
				}
				$treeid[$g+1] = $jid;
				$treepid[$g+1] = $jpid;
				$treename[$g+1] = $jname;
				$treeurl[$g+1] = $jurl;
				$treelevel[$g+1] = $jlevel;
				$g++;
			}
	}
	?>
    <header class="header container-fluid py-2">
        <nav class="container navbar navbar-expand-lg justify-content-between py-0">
            <a class="logo d-flex align-items-center py-0 navbar-brand" href="/">
                <img src="/<?=$additional[5]?>" alt="">
                <span class="d-flex flex-column align-items-end red ml-2">
                <span class="h2 font-weight-bold mb-0"><?=$additional[2]?></span>
                <span class=""><?=$additional[68]?></span>
            </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php
                    for($i=0; $i<$count; $i++){
                        ?>
                        <li class="nav-item dropdown">
                        <a <?php if($treeurl[$i]==$urls[0] || $treeurl[$i]=='main' && $url['target_type']=='main'){ ?>class="nav-link" <?php } ?>class="nav-link" href="<?=(substr($treeurl[$i],0,4)=='http'?$treeurl[$i].'" target="_blank':($treeid[$i]==2?$cur_city[0]:'').'/'.($treeurl[$i]!='main'?$treeurl[$i].'/':''))?>"><?=$treename[$i]?></a>
                        <?php
                    if(isset($treelevel[$i+1]) && $treelevel[$i+1] > $treelevel[$i]){
                        ?>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <?php
                    }
                        if(isset($treelevel[$i+1]) && $treelevel[$i+1] == $treelevel[$i]){
                            ?>
                            </li>
                            <?php
                        }
                        if(isset($treelevel[$i+1]) && $treelevel[$i+1] < $treelevel[$i]){
                            ?>
                            </li>
                            <?php
                            for($m = 1; $m <= $treelevel[$i] - (isset($treelevel[$i+1])?$treelevel[$i+1]:0); $m++){
                                ?>
                                </ul>
                                </li>
                                <?php
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="d-flex flex-column align-items-end">
                <a class="mb-2 gray font-weight-bold h4" href="tel:<?=str_replace(array(' ','(',')','-'),'',$additional[4])?>"><?=$additional[4]?></a>
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn  btn-orange">Заказать звонок</button>
            </div>
        </nav>
    </header>
