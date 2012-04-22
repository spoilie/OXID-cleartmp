
	1. copy the content of "copy_this" into the shop root folder
	2. if you haven't modifies the header of your admin template, them just copy the header.tpl into the out/admin/tpl folder,
	otherwise put this code before the "</ul>":
	
      [{* clear tmp/ start *}]
		<li class="sep">
			<a href="[{$oViewConf->getSelfLink()}]&cl=navigation&amp;fnc=cleartmp" id="cleartmplink" target="hiddenframe" class="rc"><b>[{ oxmultilang ident="NAVIGATION_CLEARTMP" }]</b></a>
			<iframe name="hiddenframe" style="display:none;"></iframe>
		</li>
      [{* clear tmp/ end *}]
	  
	3. insert a new module in backend:
			navigation=>vtutils/navigation_ext
		or if navigation is already extended bo other module, append "&vtutils/navigation_ext"
		
	4. clear tmp/ but enjoy it, cause its the last time you do it manually :D
	5. reload the backend
	
	Licensing: 

	HEINER DIRECT GmbH & Co KG
	Author: Marat Bedoev

	Copyright 2012 HEINER DIRECT GmbH & Co KG

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.