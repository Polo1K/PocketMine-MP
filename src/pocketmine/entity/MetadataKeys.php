<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

namespace pocketmine\entity;

interface MetadataKeys{

	const DATA_FLAGS = 0;

	const DATA_VARIANT = 2;
	const DATA_COLOUR = 3;
	const DATA_NAMETAG = 4;
	const DATA_OWNER_EID = 5;

	const DATA_AIR_SUPPLY = 7;

	const DATA_CREEPER_SWELL = 19;
	const DATA_CREEPER_SWELL_OLD = 20; //???
	const DATA_CREEPER_SWELL_DIRECTION = 21;

	const DATA_PLAYER_BED_POSITION = 27;

	const DATA_LEAD_HOLDER_EID = 38;
	const DATA_ENTITY_SCALE = 39; //SIZE!

	const DATA_MAX_AIR_SUPPLY = 44;

	const DATA_BOUNDING_BOX_WIDTH = 53;
	const DATA_BOUNDING_BOX_HEIGHT = 54;

	//Flags
	const DATA_FLAG_ONFIRE = 0;
	const DATA_FLAG_SNEAKING = 1;

	const DATA_FLAG_SPRINTING = 3;

	const DATA_FLAG_INVISIBLE = 5;
}