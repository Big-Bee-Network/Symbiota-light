/* The following mysql script was used to create the stored procedure 'BeeFilter'

Too use this filter in a stored IPT/DWC-A import - add into the "stored procedures" field:
BeeFilter(##) where ## = collid for the current collection

The BeeFilter can be updated by adding queries to the code below.

Draft version 29 Oct 2021 - M. Andrew Johnston
*/

CREATE DEFINER=`REMOVED` PROCEDURE `BeeFilter`(IN collidInput INT)
BEGIN
#include Anthophila families
UPDATE uploadspectemp 
SET genericcolumn1 = "1"
WHERE collid = collidInput AND family IN("Andrenidae","Apidae","Colletidae","Halictidae","Megachilidae","Melittidae","Stenotritidae");

#Include undet "bees"
UPDATE uploadspectemp 
SET genericcolumn1 = "1"
WHERE collid = collidInput AND sciname IN("Apoidea","Anthophila");
/*
#Include all records where the sciname matches a known name in the backbone taxonomy
UPDATE uploadspectemp u INNER JOIN taxa t ON u.sciname = t.sciname
SET u.genericcolumn1 = "1"
WHERE u.collid = collidInput AND t.tid IS NOT NULL;
*/

#Remove all specimens that failed to be marked as keep
DELETE FROM uploadspectemp WHERE collid = collidInput AND genericcolumn1 IS NULL;

#Remove speific things that bypass filter

/*random plant example
DELETE FROM uploadspectemp WHERE collid = collidInput AND family IN("Poaceae","Boraginaceae");
*/

#Clean sciname to remove authorship from Arctos and other IPT DwC-A's - only matches " AuthorshipString"

UPDATE uploadspectemp
SET sciname = REPLACE(sciname, CONCAT(' ',scientificNameAuthorship),'')
WHERE collid = collidInput;

END
