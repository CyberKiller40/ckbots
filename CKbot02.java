package CKbots;
import robocode.*;
import java.awt.Color;

// API help : http://robocode.sourceforge.net/docs/robocode/robocode/Robot.html

/**
 * CKbot02 - a robot by Cyber Killer
 */
public class CKbot02 extends Robot
{
	/**
	 * run: CKbot02's default behavior
	 */
	public void run() {
		// Initialization of the robot should be put here

		// After trying out your robot, try uncommenting the import at the top,
		// and the next line:

		setColors(Color.blue,Color.blue,Color.blue); // body,gun,radar

		setAdjustGunForRobotTurn(true);
		setAdjustRadarForGunTurn(true); 
        setAdjustRadarForRobotTurn(true);

		turnGunLeft(getGunHeading()); //wyprostowanie guna
		turnRadarLeft(getRadarHeading()); //wyprostowanie radaru

		// Robot main loop
		while(true) {
			// Replace the next 4 lines with any behavior you would like
			ahead(100);
			int rad;
			for(rad=0;rad<(360/5);rad++)
			{
				turnRadarRight(5);
				ahead(10);
			}
			turnRight(45);
		}
	}

	/**
	 * onScannedRobot: What to do when you see another robot
	 */
	public void onScannedRobot(ScannedRobotEvent e) {
		// Replace the next line with any behavior you would like
		stop();
		double KatRadaru = getRadarHeading();
		turnGunLeft(getGunHeading());
		turnGunRight(KatRadaru);
		int i;
		for(i=0;i<3;i++)
		{
			fire(3);
		}
	}

	/**
	 * onHitByBullet: What to do when you're hit by a bullet
	 */
	public void onHitByBullet(HitByBulletEvent e) {
		// Replace the next line with any behavior you would like
		back(10);
	}
	
	/**
	 * onHitWall: What to do when you hit a wall
	 */
	public void onHitWall(HitWallEvent e) {
		// Replace the next line with any behavior you would like
		back(20);
		turnRight(90);
	}	
}
