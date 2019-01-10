<!-----------Debut texte principale--------->
     			<td width="565" height="393" valign="top" align="center">
     				<table width="485" border="0" cellspacing="0" bordercolor="#002040" cellpadding="0" bgcolor="#FFFFFF">
            				<tr> 
              					<td bgcolor="#002040"> 
                					<b><font color="#FFFFFF">
							<p class=MsoNormal align="left">
                            				<span style="font-size: 10.0pt; mso-bidi-font-size: 12.0pt; font-family: Tahoma; mso-ansi-language: FR-BE" lang="FR-BE">
					
								&nbsp;Livre d'or
				
							</span></p>
							</font></b>
              					</td>
            				</tr>
            				<tr> 
              						<td height="33" bgcolor="#FFFFFF"> 
              		  				<font color="#000000" face="Tahoma" size="2">
							<p class=MsoNormal align="left">
							<span lang=FR-BE style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Tahoma;mso-ansi-language:FR-BE'>

								&nbsp;Bonjour ,<br>
								Vous êtes maintenant sur le livre d'or du site.
								Laissez y une trace de votre passage,en indiquant un commenatires
								remarques ou suggestions.
								<?php
									$db = mysql_connect('localhost:8888', 'root', ''); 
									mysql_select_db('livredor',$db);                    
									$req = mysql_query('SELECT * FROM guest');          
									$res = mysql_numrows($req);                               
									$res2 = $res - 5;
									mysql_close($db); 
          								echo 'Il y a '.$res.' enregistrement(s) dans le livre d or.<br>';
						
									  
								?>
								<form method="post" action="guest.php">
									<SELECT NAME="nbre">
									<option SELECTED VALUE="10">afficher les 10 derniers messages</option>
  									<option VALUE="20">afficher les 20 derniers messages</option>
									<option VALUE="50">afficher les 50 derniers messages</option>
									<option VALUE="100">afficher les 100 derniers messages</option>
									<option VALUE="69">tout</option>
									<input type="submit" value="voir">	
								</select>
								</form>
							<o:p></o:p></span>
							</p>
			  				</font>
             						</td>
            				</tr>
            				</table>
							&nbsp;
				<table width="485" border="0" cellspacing="0" bordercolor="#002040" cellpadding="0" bgcolor="#FFFFFF">
            				<tr> 
              					<td bgcolor="#002040"> 
                					<b><font color="#FFFFFF">
							<p class=MsoNormal align="left">
							<span lang=FR-BE style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Tahoma;mso-ansi-language:FR-BE'>

                               					 &nbsp;messages: 
			
							<o:p></o:p></span></p>
							</font></b>
              					</td>
            				</tr>
            				<tr> 
              						<td height="33" bgcolor="#FFFFFF"> 
              		  				<font color="#000000" face="Tahoma" size="2">
							<p class=MsoNormal align="left">
							<span lang=FR-BE style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Tahoma;mso-ansi-language:FR-BE'>

                           					    &nbsp;<br>
								    <?php  
									$db = mysql_connect('localhost:8888', 'root', ''); 
									mysql_select_db('aprimexpert_db',$db); 
									if ($nbre)
									{
										if ($nbre!=69)
										{
											$res3 = "SELECT * FROM guest order by id desc  LIMIT ".$nbre;//.$res2.",".$res;
										}else
										{
											$res3 =  "SELECT * FROM guest order by id desc";
										}
										
									}else
									{
										$res3 = "SELECT * FROM guest order by id desc  LIMIT 10";	
									}
									$sql = $res3; 
									$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
									while($data = mysql_fetch_array($req)) 
   									 { 
    										
										echo '<center><table border="1" cellspacing="0" width="450"  bordercolor="#002040"><tr><td width="450" height="20" bordercolor="#002040" bgcolor="#002040" valign="top"><font face="Tahoma" color="#FFFFFF" size="2"> Par<b> '.$data['nom'].'</b> le '.$data['date'].'</font><br></td></tr><tr><td width="450"  valign="top"><font face="Tahoma" size="2">'; 
    										echo ' commentaire : <br><i><b>'.$data['ms'].'</b></i></fonts></td></tr></table></center>'; 
  									 } 
									$res = mysql_numrows($req); 
									mysql_close(); 
								   ?>   
			
							<o:p></o:p></span>
							</p>
			  				</font>
             						</td>
            				</tr>
        			</table>
        			&nbsp;
				<table width="485" border="0" cellspacing="0" bordercolor="#002040" cellpadding="0" bgcolor="#FFFFFF">
            				<tr> 
              					<td bgcolor="#002040"> 
                					<b><font color="#FFFFFF">
							<p class=MsoNormal align="left">
							<span lang=FR-BE style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Tahoma;mso-ansi-language:FR-BE'>

                                				&nbsp;ajouter un message: 
			
							<o:p></o:p></span></p>
							</font></b>
              					</td>
            				</tr>
            				<tr> 
              						<td height="33" bgcolor="#FFFFFF"> 
              		  				<font color="#000000" face="Tahoma" size="2">
							<p class=MsoNormal align="left">
							<span lang=FR-BE style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Tahoma;mso-ansi-language:FR-BE'>
								&nbsp;<br>
								<center>
								*<i>Vous êtes libres de vos opinions et vous pouvez écrire ce que vous voulez.<br>
								Mais de même l'administrateur est libre de supprimer les messages.<br>
								Si vous désirez écrire une remarque négative évitez la vulgarité sinon votre <br>
								message sera supprimer.</i><br>
                               					<form method="post" action="addms.php">
								Nom : <input type="text" name="nom" size="12"><br>
								commentaire : <br>
								<textarea 	name="des"
										cols="40" rows="5"
										wrap="VIRTUAL" style="width: 300px"></textarea>
								<br>
								<input type="submit" value="envoyer">
								</form>
								</center>
							<o:p></o:p></span>
							</p>
			  				</font>
             						</td>
            				</tr>
        				</table>
        				&nbsp;
					<table width="485" border="0" cellspacing="0" bordercolor="#002040" cellpadding="0" bgcolor="#FFFFFF">
            				<tr> 
              					<td bgcolor="#002040"> 
                					<b><font color="#FFFFFF">
							<p class=MsoNormal align="left">
							<span lang=FR-BE style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Tahoma;mso-ansi-language:FR-BE'>

                                				&nbsp;retour: 
			
							<o:p></o:p></span></p>
							</font></b>
              					</td>
            				</tr>
            				<tr> 
              						<td height="33" bgcolor="#FFFFFF"> 
              		  				<font color="#000000" face="Tahoma" size="2">
							<p class=MsoNormal align="left">
							<span lang=FR-BE style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Tahoma;mso-ansi-language:FR-BE'>
								
								<a href="index.php"> retour sur la homepage </a>
									
							<o:p></o:p></span>
							</p>
			  				</font>
             						</td>
            				</tr>
        			</table>
			</td>
    		
</div>
</body>