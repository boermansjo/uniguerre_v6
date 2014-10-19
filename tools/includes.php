<?php

require_once "constant.php";
require_once dirname(__DIR__) . "/" . WOOTOOK_FILE_CONFIG;

/** Tools */
/** -- specials tools DALFramework -- */
require_once WOOTOOK_DIR_TOOLS . '/DALFramework/Parameters.php';
require_once WOOTOOK_DIR_TOOLS . '/DALFramework/SqlRead.php';
require_once WOOTOOK_DIR_TOOLS . '/DALFramework/SqlWrite.php';
/** ------------------------ * */
require_once WOOTOOK_DIR_TOOLS . '/getAsUrl.php';
require_once WOOTOOK_DIR_TOOLS . '/guid.php';
require_once WOOTOOK_DIR_TOOLS . '/iif.php';
require_once WOOTOOK_DIR_TOOLS . '/secure.php';
require_once WOOTOOK_DIR_TOOLS . '/wordLength.php';
require_once WOOTOOK_DIR_TOOLS . '/formule.php';
require_once WOOTOOK_DIR_TOOLS . '/array_sort.php';


/** Model */
/** -- Classe -- */
require_once WOOTOOK_DIR_MODEL . '/Menu.class.php';
require_once WOOTOOK_DIR_MODEL . '/MessageSIWE.class.php';
/** ------------ */
require_once WOOTOOK_DIR_MODEL . '/_SQL.php';
require_once WOOTOOK_DIR_MODEL . '/BddSave.class.php';
require_once WOOTOOK_DIR_MODEL . '/Page.class.php';
require_once WOOTOOK_DIR_MODEL . '/Utilisateur.class.php';
require_once WOOTOOK_DIR_MODEL . '/Ressources.class.php';

/** DAL (Data Access Layer) > DAO (Data Access Object) */
require_once WOOTOOK_DIR_DAL . '/daos/UtilisateurDAO.php';
require_once WOOTOOK_DIR_DAL . '/daos/RessourceDAO.php';
require_once WOOTOOK_DIR_DAL . '/daos/LangueDAO.php';
require_once WOOTOOK_DIR_DAL . '/daos/MenuDAO.php';
require_once WOOTOOK_DIR_DAL . '/daos/TranslationDAO.php';

/** DAL (Data Access Layer) > REQUESTS (requêtes SQL) */
require_once WOOTOOK_DIR_DAL . '/requests/SQLSelectRessources.php';
require_once WOOTOOK_DIR_DAL . '/requests/SQLSelectRessourcesParIdLangue.php';
require_once WOOTOOK_DIR_DAL . '/requests/SQLSelectUtilisateurs.php';
require_once WOOTOOK_DIR_DAL . '/requests/SQLSelectUtilisateurParId.php';
require_once WOOTOOK_DIR_DAL . '/requests/SQLInsertUtilisateur.php';
require_once WOOTOOK_DIR_DAL . '/requests/SQLSelectLangues.php';
require_once WOOTOOK_DIR_DAL . '/requests/SQLSelectVerifierIdentiteConnexion.php';
require_once WOOTOOK_DIR_DAL . '/requests/SQLSelectCompterMemeNomUtilisateur.php';
require_once WOOTOOK_DIR_DAL . '/requests/SQLSelectTranslationParCode.php';
require_once WOOTOOK_DIR_DAL . '/requests/SQLSelectMenus.php';

/** DAL (Data Access Layer) > REQUESTS (requêtes SQL) > Tables */
require_once WOOTOOK_DIR_DAL . '/requests/tables/table_planets.php';
require_once WOOTOOK_DIR_DAL . '/requests/tables/table_resources.php';
require_once WOOTOOK_DIR_DAL . '/requests/tables/table_users.php';
require_once WOOTOOK_DIR_DAL . '/requests/tables/table_menus.php';
require_once WOOTOOK_DIR_DAL . '/requests/tables/table_languages.php';
require_once WOOTOOK_DIR_DAL . '/requests/tables/table_translations.php';

?>
