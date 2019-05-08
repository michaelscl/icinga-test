[global]
authmodule="CoreAuthModIcingaweb2"
authorisationmodule="CoreAuthorisationModIcingaweb2"
logonmodule="LogonIcingaweb2"

[paths]
htmlcgi = "/icingaweb2"

[defaults]
; This selects the backend_ndomy_1 defined below
backend = "ndomy_1"

urltarget = "_top"
hosturl="[htmlcgi]/monitoring/host/show?host=[host_name]"
hostgroupurl="[htmlcgi]/monitoring/list/hostgroups?hostgroup_name=[hostgroup_name]"
serviceurl="[htmlcgi]/monitoring/service/show?host=[host_name]&service=[service_description]"
servicegroupurl="[htmlcgi]/monitoring/list/servicegroups?servicegroup_name=[servicegroup_name]"
mapurl="[htmlcgi]/nagvis/show/map?map=[map_name]"
headermenu="0"
stylesheet="icingaweb-nagvis-integration.css"

[backend_ndomy_1]
backendtype="ndomy"
dbhost="localhost"
dbport=3306
dbname="icinga"
dbuser="icinga"
dbpass="icinga"
dbprefix="icinga_"
dbinstancename="default"
;maxtimewithoutupdate=180
